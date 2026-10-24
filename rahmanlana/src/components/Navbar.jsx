function Navbar({ onMenuOpen }) {
  return (
    <header className="fixed inset-x-0 top-0 z-40 border-b border-black/5 bg-white/90 backdrop-blur">
      <nav className="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 sm:px-8 lg:px-10">
        <a
          href="#home"
          className="text-xl font-black tracking-[0.16em] text-[#111111] uppercase"
          aria-label="Rahman Lana home"
        >
          Rahman Lana
        </a>

        <button
          type="button"
          onClick={onMenuOpen}
          className="motion-button flex h-12 w-12 items-center justify-center rounded-full border border-[#111111]/10 text-[#111111] hover:border-[#F5C542] hover:bg-[#F5C542]"
          aria-label="Buka menu"
        >
          <span className="flex w-5 flex-col gap-1.5">
            <span className="h-0.5 w-full bg-current"></span>
            <span className="h-0.5 w-full bg-current"></span>
            <span className="h-0.5 w-full bg-current"></span>
          </span>
        </button>
      </nav>
    </header>
  )
}

export default Navbar
