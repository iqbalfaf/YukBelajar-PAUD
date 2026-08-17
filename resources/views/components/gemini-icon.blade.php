@props(['class' => 'w-5 h-5'])

<svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 1C12 7.07513 7.07513 12 1 12C7.07513 12 12 16.9249 12 23C12 16.9249 16.9249 12 23 12C16.9249 12 12 7.07513 12 1Z" 
          fill="url(#gemini-sparkle-grad)" />
    <path d="M18.5 2C18.5 4.48528 16.4853 6.5 14 6.5C16.4853 6.5 18.5 8.51472 18.5 11C18.5 8.51472 20.5147 6.5 23 6.5C20.5147 6.5 18.5 4.48528 18.5 2Z" 
          fill="url(#gemini-sparkle-sub)" opacity="0.85" />
    <defs>
        <linearGradient id="gemini-sparkle-grad" x1="1" y1="1" x2="23" y2="23" gradientUnits="userSpaceOnUse">
            <stop stop-color="#38BDF8" />
            <stop offset="0.35" stop-color="#6366F1" />
            <stop offset="0.7" stop-color="#A855F7" />
            <stop offset="1" stop-color="#EC4899" />
        </linearGradient>
        <linearGradient id="gemini-sparkle-sub" x1="14" y1="2" x2="23" y2="11" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FDE047" />
            <stop offset="1" stop-color="#F43F5E" />
        </linearGradient>
    </defs>
</svg>
