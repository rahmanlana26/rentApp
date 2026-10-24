function Footer() {
  return (
    <footer className="bg-white px-5 py-8 sm:px-8 lg:px-10">
      <div className="reveal mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 text-center sm:flex-row sm:text-left">
        <p className="text-sm font-semibold text-[#6B7280]">
          © 2026 Nor Rahman Maulana. All rights reserved.
        </p>
        <div className="flex flex-wrap justify-center gap-4 text-sm font-bold text-[#111111]">
          <a
            href="https://linkedin.com/in/rahmanlana"
            target="_blank"
            rel="noreferrer"
            className="hover:text-[#F5C542]"
          >
            LinkedIn
          </a>
          <a
            href="https://rahmanlana.my.id"
            target="_blank"
            rel="noreferrer"
            className="hover:text-[#F5C542]"
          >
            Website
          </a>
        </div>
      </div>
    </footer>
  )
}

export default Footer
