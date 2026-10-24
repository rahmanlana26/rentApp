import { skills } from '../data/skills'

function Skills() {
  return (
    <section id="skills" className="bg-white px-5 py-24 sm:px-8 lg:px-10">
      <div className="mx-auto max-w-7xl">
        <div className="reveal mb-12 max-w-3xl">
          <p className="mb-3 text-sm font-black tracking-[0.18em] text-[#F5C542] uppercase">
            Capabilities
          </p>
          <h2 className="text-4xl font-black text-[#111111] sm:text-5xl">
            Keahlian
          </h2>
        </div>

        <div className="reveal animation-delay-100 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
          {skills.map((skillGroup) => (
            <article
              key={skillGroup.category}
              className="motion-card bg-[#F8F9FA] p-6 hover:shadow-[0_18px_60px_rgba(17,17,17,0.08)]"
            >
              <h3 className="text-xl font-black text-[#111111]">
                {skillGroup.category}
              </h3>
              <div className="mt-5 flex flex-wrap gap-2">
                {skillGroup.items.map((item) => (
                  <span
                    key={item}
                    className="rounded-full bg-white px-4 py-2 text-sm font-bold text-[#333333] ring-1 ring-black/5 transition hover:bg-[#F5C542] hover:text-[#111111]"
                  >
                    {item}
                  </span>
                ))}
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  )
}

export default Skills
