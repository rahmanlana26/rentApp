const menuItems = [
  { label: 'Home', href: '#home' },
  { label: 'About', href: '#about' },
  { label: 'Resume', href: '#resume' },
  { label: 'Skills', href: '#skills' },
  { label: 'Projects', href: '#projects' },
  { label: 'Contact', href: '#contact' },
]

function FullScreenMenu({ isOpen, onClose }) {
  return (
    <div
      className={`fixed inset-0 z-50 flex min-h-screen flex-col bg-black/85 text-white backdrop-blur-sm transition-all duration-300 ease-in-out ${
        isOpen
          ? 'visible translate-y-0 opacity-100'
          : 'invisible -translate-y-3 opacity-0'
      }`}
      aria-hidden={!isOpen}
    >
      <div className="absolute inset-x-0 top-0 z-20 mx-auto flex w-full max-w-7xl items-center justify-between px-5 py-6 sm:px-8 lg:px-10">
        <span className="text-sm font-black tracking-[0.16em] text-white/45 uppercase sm:text-base">
          Rahman Lana
        </span>
        <button
          type="button"
          onClick={onClose}
          className="motion-button flex h-10 w-10 items-center justify-center text-3xl font-light leading-none text-white/80 outline-none hover:text-[#F5C542] focus-visible:text-[#F5C542]"
          aria-label="Tutup menu"
        >
          <span aria-hidden="true" className="-mt-1 block">
            &times;
          </span>
        </button>
      </div>

      <div
        className={`relative z-10 mx-auto flex w-full flex-1 flex-col items-center justify-center px-5 transition-all delay-75 duration-300 ease-in-out sm:px-8 lg:px-10 ${
          isOpen
            ? 'translate-y-0 scale-100 opacity-100'
            : 'translate-y-5 scale-95 opacity-0'
        }`}
      >
        <ul className="flex flex-col items-center justify-center gap-4 text-center sm:gap-5">
          {menuItems.map((item) => (
            <li key={item.href}>
              <a
                href={item.href}
                onClick={onClose}
                className="block text-lg font-bold leading-tight text-white transition-all duration-300 ease-in-out hover:-translate-y-0.5 hover:text-[#F5C542] sm:text-xl lg:text-2xl"
              >
                {item.label}
              </a>
            </li>
          ))}
        </ul>
        <div className="mt-10 flex items-center gap-5 text-xs font-bold text-white/45">
          <a
            href="https://linkedin.com/in/rahmanlana"
            target="_blank"
            rel="noreferrer"
            className="transition hover:text-[#F5C542]"
          >
            LinkedIn
          </a>
          <a
            href="https://rahmanlana.my.id"
            target="_blank"
            rel="noreferrer"
            className="transition hover:text-[#F5C542]"
          >
            Website
          </a>
        </div>
      </div>
    </div>
  )
}

export default FullScreenMenu
