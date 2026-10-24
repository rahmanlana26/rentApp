import { projects } from '../data/projects'

function Projects() {
  return (
    <section id="projects" className="bg-[#F8F9FA] px-5 py-24 sm:px-8 lg:px-10">
      <div className="mx-auto max-w-7xl">
        <div className="reveal mb-12 max-w-3xl">
          <p className="mb-3 text-sm font-black tracking-[0.18em] text-[#F5C542] uppercase">
            Portfolio
          </p>
          <h2 className="text-4xl font-black text-[#111111] sm:text-5xl">
            Project
          </h2>
        </div>

        <div className="reveal animation-delay-100 grid gap-6 md:grid-cols-2">
          {projects.map((project, index) => (
            <article
              key={project.name}
              className="motion-card group bg-white p-6 shadow-[0_18px_60px_rgba(17,17,17,0.06)] hover:shadow-[0_24px_80px_rgba(17,17,17,0.1)] sm:p-8"
            >
              <div className="mb-6 flex items-center justify-between gap-4">
                <span className="text-sm font-black text-[#F5C542]">
                  0{index + 1}
                </span>
                <span className="rounded-full bg-[#F8F9FA] px-4 py-1.5 text-sm font-bold text-[#111111]">
                  {project.status}
                </span>
              </div>
              <h3 className="text-2xl font-black text-[#111111]">
                {project.name}
              </h3>
              <p className="mt-4 leading-7 text-[#4B5563]">
                {project.description}
              </p>
              <div className="mt-6 flex flex-wrap gap-2">
                {project.technologies.map((technology) => (
                  <span
                    key={technology}
                    className="rounded-full border border-black/10 px-3 py-1.5 text-sm font-bold text-[#333333] transition group-hover:border-[#F5C542]/60"
                  >
                    {technology}
                  </span>
                ))}
              </div>
              <div className="mt-8 flex flex-col gap-3 sm:flex-row">
                <button
                  type="button"
                  className="min-h-11 rounded-full bg-[#111111] px-5 py-3 text-sm font-black text-white"
                  disabled
                >
                  Demo Coming Soon
                </button>
                <button
                  type="button"
                  className="min-h-11 rounded-full border border-[#111111]/15 px-5 py-3 text-sm font-black text-[#111111]"
                  disabled
                >
                  GitHub Coming Soon
                </button>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  )
}

export default Projects
