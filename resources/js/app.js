import Alpine from 'alpinejs';
import confetti from 'canvas-confetti';

window.Alpine = Alpine;
window.confetti = confetti;

/**
 * Web Audio API Sound Synthesizer & Cheerful Speech Engine for YukBelajar PAUD
 * Super energetic, game-like sound effects & ultra-cheerful Indonesian voice.
 */
class SoundEngine {
    constructor() {
        this.ctx = null;
        this.isMuted = localStorage.getItem('kuy_muted') === 'true';
        this.speechAvailable = 'speechSynthesis' in window;
        this.voices = [];

        if (this.speechAvailable) {
            this.loadVoices();
            window.speechSynthesis.onvoiceschanged = () => {
                this.loadVoices();
            };
        }
    }

    loadVoices() {
        this.voices = window.speechSynthesis.getVoices();
    }

    initContext() {
        if (!this.ctx) {
            const AudioContext = window.AudioContext || window.webkitAudioContext;
            if (AudioContext) {
                this.ctx = new AudioContext();
            }
        }
        if (this.ctx && this.ctx.state === 'suspended') {
            this.ctx.resume();
        }
    }

    toggleMute() {
        this.isMuted = !this.isMuted;
        localStorage.setItem('kuy_muted', this.isMuted.toString());
        return this.isMuted;
    }

    playTone(freq, duration = 0.15, type = 'sine', startTime = 0, gainLevel = 0.3) {
        if (this.isMuted) return;
        this.initContext();
        if (!this.ctx) return;

        const osc = this.ctx.createOscillator();
        const gain = this.ctx.createGain();
        const now = this.ctx.currentTime + startTime;

        osc.type = type;
        osc.frequency.setValueAtTime(freq, now);

        gain.gain.setValueAtTime(0.01, now);
        gain.gain.linearRampToValueAtTime(gainLevel, now + 0.02);
        gain.gain.exponentialRampToValueAtTime(0.001, now + duration);

        osc.connect(gain);
        gain.connect(this.ctx.destination);

        osc.start(now);
        osc.stop(now + duration);
    }

    // SFX: Bubbly Pop Click
    playClick() {
        this.playTone(600, 0.06, 'triangle', 0, 0.25);
    }

    // SFX: Energetic Upbeat Chirp
    playChirp() {
        this.playTone(800, 0.08, 'sine', 0, 0.2);
        this.playTone(1200, 0.12, 'triangle', 0.06, 0.25);
    }

    // SFX: Harmonious Bright Ding-Dong
    playCorrect() {
        this.playTone(659.25, 0.12, 'triangle', 0, 0.3); // E5
        this.playTone(987.77, 0.3, 'triangle', 0.09, 0.35); // B5
        this.playTone(1318.51, 0.4, 'sine', 0.18, 0.35); // E6
    }

    // SFX: Gentle Encouraging Boop
    playWrong() {
        this.playTone(440, 0.14, 'sine', 0, 0.25);
        this.playTone(349.23, 0.22, 'sine', 0.1, 0.25);
    }

    // SFX: Full Victory Fanfare
    playVictory() {
        const notes = [523.25, 659.25, 783.99, 1046.50, 1318.51]; // C5, E5, G5, C6, E6
        notes.forEach((freq, idx) => {
            this.playTone(freq, 0.22, 'triangle', idx * 0.09, 0.35);
        });
    }

    // SFX: Star Pop & Sparkle
    playStar() {
        this.playTone(1046.50, 0.1, 'sine', 0, 0.3);
        this.playTone(1567.98, 0.15, 'triangle', 0.07, 0.35);
        this.playTone(2093.00, 0.25, 'sine', 0.14, 0.35);
    }

    /**
     * Web Speech API: Super Energetic, High-Spirited, Cheerful Mascot Voice
     * Tuned specifically for Indonesian children (PAUD / TK).
     */
    speak(text, rate = 1.02, pitch = 1.38) {
        if (this.isMuted || !this.speechAvailable || !text) return;
        this.initContext();

        // Play an energetic little chirp cue before speaking
        this.playChirp();

        window.speechSynthesis.cancel(); // Stop any currently speaking voice

        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'id-ID';
        utterance.rate = rate; // Energetic, lively tempo
        utterance.pitch = pitch; // Cheerful cartoon tone

        // Select the best natural-sounding Indonesian voice
        if (this.voices.length > 0) {
            const indonesianVoice = this.voices.find(v => 
                (v.lang.includes('id') || v.lang.includes('ID')) && 
                (v.name.includes('Google') || v.name.includes('Gadis') || v.name.includes('Indonesian') || v.name.includes('Damayanti'))
            ) || this.voices.find(v => v.lang.includes('id') || v.lang.includes('ID'));

            if (indonesianVoice) {
                utterance.voice = indonesianVoice;
            }
        }

        window.speechSynthesis.speak(utterance);
    }
}

window.soundEngine = new SoundEngine();

// Confetti Blast Effect
window.triggerConfetti = function(originY = 0.6) {
    confetti({
        particleCount: 130,
        spread: 90,
        origin: { y: originY },
        colors: ['#38bdf8', '#facc15', '#4ade80', '#f472b6', '#c084fc', '#fb923c']
    });
};

// Start Alpine
Alpine.start();
