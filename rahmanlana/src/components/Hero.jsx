import heroImage from '../assets/images/rahman.webp'

function Hero() {
  return (
    <section
      id="home"
      className="relative flex min-h-screen items-center overflow-hidden bg-[#F8F9FA] px-5 pt-28 pb-16 sm:px-8 lg:px-10"
    >
      <div className="absolute inset-x-0 top-0 h-1 bg-[#F5C542]"></div>
      <div className="mx-auto grid w-full max-w-7xl items-center gap-12 lg:grid-cols-[1.05fr_0.95fr]">
        <div className="reveal">
          <p className="mb-4 text-lg font-semibold text-[#6B7280]">
            Halo, saya
          </p>
          <h1 className="max-w-4xl text-5xl font-black leading-[1.02] text-[#111111] sm:text-6xl lg:text-7xl">
            Nor Rahman Maulana
          </h1>
          <p className="mt-6 max-w-3xl text-xl font-bold text-[#111111] sm:text-2xl">
            Web Developer, Mobile Developer, Graphic Designer, dan Basic
            Networking
          </p>
          <p className="mt-6 max-w-3xl text-base leading-8 text-[#4B5563] sm:text-lg">
            Mahasiswa D-IV Teknik Informatika Politeknik Negeri Malang dengan
            latar belakang Teknik Komputer dan Jaringan. Saya berfokus pada
            pengembangan website, aplikasi mobile, desain digital, serta
            memiliki pemahaman dasar jaringan komputer seperti konfigurasi
            Mikrotik dasar, IP Addressing, routing dasar, dan troubleshooting
            jaringan sederhana.
          </p>
          <div className="mt-9 flex flex-col gap-3 sm:flex-row">
            <a
              href="#projects"
              className="motion-button inline-flex min-h-12 items-center justify-center rounded-full bg-[#F5C542] px-7 py-3 text-sm font-black text-[#111111] hover:bg-[#111111] hover:text-white hover:shadow-[0_14px_35px_rgba(17,17,17,0.18)]"
            >
              Lihat Project
            </a>
            <a
              href="#contact"
              className="motion-button inline-flex min-h-12 items-center justify-center rounded-full border border-[#111111]/15 px-7 py-3 text-sm font-black text-[#111111] hover:border-[#111111] hover:bg-white hover:shadow-[0_14px_35px_rgba(17,17,17,0.08)]"
            >
              Hubungi Saya
            </a>
          </div>
        </div>

        <div className="reveal animation-delay-200 mx-auto flex w-full max-w-[430px] flex-col items-center">
          <div className="animate-float-soft relative flex aspect-square w-full items-center justify-center rounded-full bg-white p-4 shadow-[0_30px_100px_rgba(17,17,17,0.12)]">
            <div className="absolute inset-6 rounded-full border border-[#F5C542]/50"></div>
            <img
              src={heroImage}
              alt="Foto Nor Rahman Maulana"
              className="relative z-10 h-full w-full rounded-full object-cover object-center"
            />
          </div>
        </div>
      </div>
    </section>
  )
}

export default Hero
