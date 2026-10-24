const profileItems = [
  ['Nama', 'Nor Rahman Maulana'],
  ['Lokasi', 'Malang, Jawa Timur'],
  ['Pendidikan', 'D-IV Teknik Informatika'],
  ['Latar belakang', 'Teknik Komputer dan Jaringan'],
  [
    'Fokus',
    'Web Development, Mobile Development, Desain Grafis, dan Basic Networking',
  ],
]

function About() {
  return (
    <section id="about" className="bg-white px-5 py-24 sm:px-8 lg:px-10">
      <div className="mx-auto max-w-7xl">
        <div className="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
          <div className="reveal">
            <p className="mb-3 text-sm font-black tracking-[0.18em] text-[#F5C542] uppercase">
              About
            </p>
            <h2 className="text-4xl font-black text-[#111111] sm:text-5xl">
              Tentang Saya
            </h2>
          </div>

          <div className="reveal animation-delay-100">
            <div className="space-y-5 text-base leading-8 text-[#4B5563] sm:text-lg">
              <p>
                Saya adalah mahasiswa D-IV Teknik Informatika Politeknik Negeri
                Malang dengan latar belakang Teknik Komputer dan Jaringan. Saya
                memiliki minat pada Web Development, Mobile Development, Desain
                Grafis, serta dasar-dasar jaringan komputer.
              </p>
              <p>
                Saya terbiasa membuat antarmuka responsif, website sederhana,
                prototipe UI/UX, dan desain promosi digital menggunakan HTML,
                CSS, JavaScript, PHP, MySQL, Figma, dan Canva. Selain itu, saya
                juga memiliki pemahaman dasar jaringan seperti konfigurasi
                Mikrotik dasar, IP Addressing, subnetting, routing dasar,
                LAN/WAN, dan troubleshooting jaringan sederhana.
              </p>
              <p>
                Saya memiliki karakter kreatif, teliti, cepat belajar, dan siap
                berkontribusi dalam lingkungan magang profesional.
              </p>
            </div>

            <div className="mt-10 grid gap-4 sm:grid-cols-2">
              {profileItems.map(([label, value]) => (
                <div
                  key={label}
                  className="motion-card border-l-4 border-[#F5C542] bg-[#F8F9FA] px-5 py-4 hover:shadow-[0_16px_45px_rgba(17,17,17,0.08)]"
                >
                  <p className="text-sm font-bold text-[#6B7280]">{label}</p>
                  <p className="mt-1 font-black text-[#111111]">{value}</p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default About
