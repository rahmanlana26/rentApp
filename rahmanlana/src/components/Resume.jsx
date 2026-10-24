import { education, experiences } from '../data/resume'

function ResumeCard({ item, type }) {
  return (
    <article className="motion-card border-l-4 border-[#F5C542] bg-white p-6 shadow-[0_18px_60px_rgba(17,17,17,0.06)] hover:shadow-[0_24px_75px_rgba(17,17,17,0.1)]">
      <div className="mb-3 flex flex-wrap items-center gap-3">
        <span className="rounded-full bg-[#F8F9FA] px-4 py-1.5 text-sm font-bold text-[#111111]">
          {item.year}
        </span>
        <span className="text-sm font-bold text-[#6B7280]">{type}</span>
      </div>
      <h3 className="text-xl font-black text-[#111111]">
        {item.institution || item.organization}
      </h3>
      {(item.major || item.role) && (
        <p className="mt-2 font-bold text-[#333333]">{item.major || item.role}</p>
      )}
      {item.description && (
        <p className="mt-4 leading-7 text-[#4B5563]">{item.description}</p>
      )}
    </article>
  )
}

function Resume() {
  return (
    <section id="resume" className="bg-[#F8F9FA] px-5 py-24 sm:px-8 lg:px-10">
      <div className="mx-auto max-w-7xl">
        <div className="reveal mb-12 max-w-3xl">
          <p className="mb-3 text-sm font-black tracking-[0.18em] text-[#F5C542] uppercase">
            Journey
          </p>
          <h2 className="text-4xl font-black text-[#111111] sm:text-5xl">
            Resume
          </h2>
        </div>

        <div className="reveal animation-delay-100 grid gap-10 lg:grid-cols-2">
          <div>
            <h3 className="mb-6 text-2xl font-black text-[#111111]">
              Pendidikan
            </h3>
            <div className="space-y-5">
              {education.map((item) => (
                <ResumeCard
                  key={`${item.institution}-${item.year}`}
                  item={item}
                  type="Pendidikan"
                />
              ))}
            </div>
          </div>

          <div>
            <h3 className="mb-6 text-2xl font-black text-[#111111]">
              Pengalaman
            </h3>
            <div className="space-y-5">
              {experiences.map((item) => (
                <ResumeCard
                  key={`${item.organization}-${item.year}-${item.role || ''}`}
                  item={item}
                  type="Pengalaman"
                />
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Resume
