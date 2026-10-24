function Contact() {
  return (
    <section id="contact" className="bg-[#111111] px-5 py-24 text-white sm:px-8 lg:px-10">
      <div className="mx-auto grid max-w-7xl gap-12 lg:grid-cols-[1fr_0.8fr]">
        <div className="reveal">
          <p className="mb-3 text-sm font-black tracking-[0.18em] text-[#F5C542] uppercase">
            Contact
          </p>
          <h2 className="text-4xl font-black sm:text-5xl">Hubungi Saya</h2>
          <p className="mt-6 max-w-3xl text-base leading-8 text-white/75 sm:text-lg">
            Saya terbuka untuk peluang magang, kerja sama project, freelance,
            dan kolaborasi pengembangan website, aplikasi mobile, desain
            digital, maupun project yang berkaitan dengan dasar jaringan
            komputer.
          </p>
          <div className="mt-9 flex flex-col gap-3 sm:flex-row">
            <a
              href="https://wa.me/6289601660641"
              target="_blank"
              rel="noreferrer"
              className="motion-button inline-flex min-h-12 items-center justify-center rounded-full bg-[#F5C542] px-7 py-3 text-sm font-black text-[#111111] hover:bg-white"
            >
              Hubungi via WhatsApp
            </a>
            <a
              href="https://linkedin.com/in/rahmanlana"
              target="_blank"
              rel="noreferrer"
              className="motion-button inline-flex min-h-12 items-center justify-center rounded-full border border-white/20 px-7 py-3 text-sm font-black text-white hover:border-[#F5C542] hover:text-[#F5C542]"
            >
              Lihat LinkedIn
            </a>
            <a
              href="https://rahmanlana.my.id"
              target="_blank"
              rel="noreferrer"
              className="motion-button inline-flex min-h-12 items-center justify-center rounded-full border border-white/20 px-7 py-3 text-sm font-black text-white hover:border-[#F5C542] hover:text-[#F5C542]"
            >
              Kunjungi Website
            </a>
          </div>
        </div>

        <div className="motion-card reveal animation-delay-100 bg-white p-6 text-[#111111] sm:p-8">
          <h3 className="text-2xl font-black">Kontak</h3>
          <dl className="mt-6 space-y-5">
            <div>
              <dt className="text-sm font-bold text-[#6B7280]">WhatsApp</dt>
              <dd className="mt-1 font-black">+62 896 0166 0641</dd>
            </div>
            <div>
              <dt className="text-sm font-bold text-[#6B7280]">LinkedIn</dt>
              <dd className="mt-1 font-black">linkedin.com/in/rahmanlana</dd>
            </div>
            <div>
              <dt className="text-sm font-bold text-[#6B7280]">Website</dt>
              <dd className="mt-1 font-black">rahmanlana.my.id</dd>
            </div>
            <div>
              <dt className="text-sm font-bold text-[#6B7280]">Lokasi</dt>
              <dd className="mt-1 font-black">Malang, Jawa Timur</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>
  )
}

export default Contact
