<?php

use App\Models\StarGift;
use App\Models\User;

test('admin dan guru dapat mengakses halaman manajemen hadiah bintang (/admin/gift-bintang)', function () {
    $admin = User::where('role', 'admin')->first();

    $response = $this->actingAs($admin)->get(route('admin.star-gifts'));

    $response->assertStatus(200);
    $response->assertViewHas('starGiftsData');
    $response->assertSee('Hadiah Bintang Emas');
    $response->assertSee('Catatan Apresiasi Guru');
});

test('tamu dan siswa dilarang mengakses halaman hadiah bintang admin', function () {
    $guestResponse = $this->get(route('admin.star-gifts'));
    $guestResponse->assertRedirect(route('login'));

    $student = User::where('role', 'student')->first();
    $studentResponse = $this->actingAs($student)->get(route('admin.star-gifts'));
    $studentResponse->assertRedirect(route('home'));
});

test('admin dapat memberikan hadiah bintang ke satu siswa spesifik dan bintang bertambah langsung', function () {
    $admin = User::where('role', 'admin')->first();
    $student = User::where('role', 'student')->first();
    $initialStars = $student->total_stars;

    $response = $this->actingAs($admin)->post(route('admin.star-gifts.send'), [
        'target_type' => 'single',
        'recipient_id' => $student->id,
        'stars_count' => 15,
        'category' => 'prestasi',
        'reason' => 'Sangat rajin dan hebat menyelesaikan kuis berhitung!',
    ]);

    $response->assertSessionHas('success');

    $student->refresh();
    expect($student->total_stars)->toBe($initialStars + 15);

    $gift = StarGift::where('recipient_id', $student->id)->latest()->first();
    expect($gift)->not->toBeNull();
    expect($gift->stars_count)->toBe(15);
    expect($gift->sender_id)->toBe($admin->id);
    expect($gift->is_claimed)->toBeFalse();
});

test('admin dapat memberikan hadiah bintang massal ke seluruh siswa aktif', function () {
    $admin = User::where('role', 'admin')->first();
    $students = User::where('role', 'student')->where('is_active', true)->get();
    $initialStarsMap = $students->pluck('total_stars', 'id');

    $response = $this->actingAs($admin)->post(route('admin.star-gifts.send'), [
        'target_type' => 'all',
        'stars_count' => 20,
        'category' => 'spesial',
        'reason' => 'Hadiah spesial perayaan hari belajar bersama!',
    ]);

    $response->assertSessionHas('success');

    foreach ($students as $student) {
        $student->refresh();
        expect($student->total_stars)->toBe($initialStarsMap[$student->id] + 20);
    }
});

test('siswa mendapatkan hadiah bintang di dashboard dan dapat mengklaim perayaan', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $admin = User::where('role', 'admin')->first();

    // Buat hadiah bintang belum diklaim
    $gift = StarGift::create([
        'sender_id' => $admin->id,
        'recipient_id' => $student->id,
        'stars_count' => 10,
        'category' => 'kreativitas',
        'reason' => 'Karya mewarnai sangat indah!',
        'is_claimed' => false,
    ]);

    // Buka game hub
    $response = $this->actingAs($student)->get(route('home'));
    $response->assertStatus(200);
    $response->assertViewHas('unclaimedGift');

    $unclaimedGift = $response->viewData('unclaimedGift');
    expect($unclaimedGift)->not->toBeNull();
    expect($unclaimedGift['id'])->toBe($gift->id);
    expect($unclaimedGift['stars_count'])->toBe(10);

    // Siswa klaim hadiah melalui AJAX route
    $claimRes = $this->actingAs($student)->postJson(route('star-gifts.claim', $gift->id));
    $claimRes->assertStatus(200);
    $claimRes->assertJson(['success' => true]);

    $gift->refresh();
    expect($gift->is_claimed)->toBeTrue();
    expect($gift->claimed_at)->not->toBeNull();
});

test('portal orang tua memuat riwayat catatan apresiasi guru', function () {
    $student = User::where('username', 'alif_ceria')->first();
    $admin = User::where('role', 'admin')->first();

    StarGift::create([
        'sender_id' => $admin->id,
        'recipient_id' => $student->id,
        'stars_count' => 25,
        'category' => 'karakter_baik',
        'reason' => 'Ananda sangat sopan dan saling berbagi dengan kawan!',
        'is_claimed' => true,
    ]);

    $response = $this->actingAs($student)->get(route('parents'));
    $response->assertStatus(200);
    $response->assertViewHas('parentData');

    $parentData = $response->viewData('parentData');
    expect($parentData['teacher_appreciations'])->not->toBeEmpty();
    expect(collect($parentData['teacher_appreciations'])->pluck('stars_count'))->toContain(25);
});
