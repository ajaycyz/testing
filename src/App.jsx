import { useState } from 'react'

const videos = [
  {
    id: '01.',
    title: 'Supply & Demand',
    description: 'Exposing your property to the most buyers and positioning it according to demand.',
  },
  {
    id: '02.',
    title: 'Pricing Strategy',
    description: 'The right value for optimal results and stronger buyer response.',
  },
]

const processSteps = [
  {
    id: '01',
    name: 'Prepare',
    text: 'Professional photos, listing copy, and strategy planning to position your land effectively.',
  },
  {
    id: '02',
    name: 'Launch',
    text: 'Multi-channel promotion and targeted buyer outreach to maximize visibility quickly.',
  },
]

const faqs = [
  'WHEN IS THE BEST TIME TO TRY AND SELL MY PROPERTY?',
  'HOW LONG DOES A PROPERTY USUALLY TAKE TO SELL?',
  'HOW ARE YOU GOING TO FIND A BUYER FOR MY PROPERTY?',
  'HOW SOON CAN YOU HAVE MY PROPERTY ON THE MARKET?',
  'DO YOU EVER SELL RESIDENTIAL OR COMMERCIAL PROPERTIES?',
]

const menuLinks = ['Properties', 'Auctions', 'About', 'Sell With Us', 'Store', 'Blog', 'Contact']

export default function App() {
  const [menuOpen, setMenuOpen] = useState(false)

  return (
    <main className="landing">
      <section className="hero hero-photo">
        <div className="overlay" />
        <header className="top-nav content-width">
          <div className="brand hero-brand">
            <p>LAND FOR SALE</p>
            <h1>LANDGUYS</h1>
          </div>
          <button className="menu-btn" aria-label="Open menu" onClick={() => setMenuOpen(true)}>
            <span />
            <span />
            <span />
          </button>
        </header>

        <div className="hero-copy content-width">
          <h2>
            EFFORTLESSLY SELL
            <br />
            YOUR LAND FASTER FOR
            <br />
            <span>TOP MARKET PRICE.</span>
          </h2>
          <button className="watch-btn">
            <span>SEE HOW LUKE WORKS FOR YOU.</span>
            <strong>WATCH HERE</strong>
            <i>▶</i>
          </button>
        </div>
      </section>

      {menuOpen && (
        <div className="menu-modal" role="dialog" aria-modal="true" onClick={() => setMenuOpen(false)}>
          <div className="menu-panel" onClick={(e) => e.stopPropagation()}>
            <button className="close-menu" aria-label="Close menu" onClick={() => setMenuOpen(false)}>✕</button>
            <nav>
              {menuLinks.map((item) => (
                <a key={item} href="#">{item}</a>
              ))}
            </nav>
          </div>
        </div>
      )}

      <section className="floating-strip">
        <div className="content-width strip-inner">
          <strong>LOCAL EXPERTISE</strong>
          <span>WITHIN REACH</span>
        </div>
      </section>

      <section className="dark section video-section">
        <div className="content-width">
          <h3>
            LEARN ABOUT LUKE’S PROCESS FOR GETTING
            <br />
            THE OPTIMAL PRICE FOR YOUR PROPERTY
          </h3>

          <div className="video-grid">
            {videos.map((item) => (
              <article key={item.id} className="video-card">
                <div className="play-icon">▶</div>
                <p className="video-title">{item.id} {item.title}</p>
                <p className="video-desc">{item.description}</p>
              </article>
            ))}
          </div>
        </div>
      </section>

      <section className="expect-section section-photo">
        <div className="content-width split">
          <div className="photo-block" />
          <article className="expect-card">
            <h3>WHAT TO EXPECT</h3>
            <h4>AT A LISTING APPOINTMENT</h4>
            <ol>
              <li>Discover your motivation</li>
              <li>Create a custom marketing plan</li>
              <li>Price your property</li>
            </ol>
            <button className="small-accent">Call Luke</button>
          </article>
        </div>
      </section>

      <section className="listing-process dark section">
        <div className="content-width process-layout">
          <div className="left-copy">
            <h3>THE LISTING PROCESS</h3>
            <p>Each listing requires an individual approach to position it to the market.</p>
          </div>

          <div className="process-cards">
            {processSteps.map((step) => (
              <article key={step.id} className="process-card">
                <div className="row-head">
                  <span>{step.id}</span>
                  <h4>{step.name}</h4>
                </div>
                <div className="card-image" />
                <p>{step.text}</p>
              </article>
            ))}
          </div>
        </div>
      </section>

      <section className="valuation section slate">
        <div className="content-width valuation-layout">
          <div>
            <h3>
              TAKE ADVANTAGE
              <br />
              <span>OF A STRONG</span>
              <br />
              SELLER’S MARKET
            </h3>
            <p>
              Land values are strong and buyer demand remains active.
              Request a fast estimate and selling strategy.
            </p>
          </div>

          <form className="mini-form">
            <h4>FIND OUT THE VALUE OF YOUR PROPERTY</h4>
            <input placeholder="Name" />
            <input placeholder="Email" />
            <input placeholder="Phone" />
            <button type="button" className="accent-btn">Get Your Evaluation</button>
          </form>
        </div>
      </section>

      <section className="stats-band dark">
        <div className="content-width stats-grid">
          <div>
            <p className="label">LISTING STATS FOR 2021</p>
            <button className="small-accent">View Lukes Listings</button>
          </div>
          <div>
            <p className="value">80%</p>
            <p className="label">Growth in Sale Volume</p>
          </div>
          <div>
            <p className="value">64%</p>
            <p className="label">Increase in Sales</p>
          </div>
          <div>
            <p className="value">#1</p>
            <p className="label">For Wisconsin LandGuys</p>
          </div>
        </div>
      </section>

      <section className="testimonials section textured">
        <div className="content-width">
          <h3>FIRSTHAND EXPERIENCES FROM PAST CLIENTS</h3>
          <div className="testimonial-grid">
            <article>
              <h4>PLEASURE TO WORK WITH</h4>
              <p>Great communication, realistic pricing advice, and a smooth closing process from start to finish.</p>
            </article>
            <article>
              <h4>PROFESSIONAL</h4>
              <p>Clear updates, strong marketing execution, and a practical strategy tailored to our property.</p>
            </article>
            <article>
              <h4>VERY KNOWLEDGEABLE</h4>
              <p>Excellent local expertise that helped us make decisions confidently and secure strong buyer interest.</p>
            </article>
          </div>
        </div>
      </section>

      <section className="profile section-photo">
        <div className="content-width split">
          <div className="photo-block alt" />
          <article className="profile-card">
            <p className="kicker">SOUTHEASTERN WISCONSIN</p>
            <h3>LUKE WESSEL</h3>
            <p>
              Local land specialist focused on pricing, presentation, and targeted marketing.
              Dedicated to helping owners sell with confidence and clarity.
            </p>
            <button className="small-accent">Call Luke</button>
          </article>
        </div>
      </section>

      <section className="faq dark section">
        <div className="content-width">
          <h3>YOU HAVE QUESTIONS. WE HAVE ANSWERS.</h3>
          {faqs.map((q) => (
            <details key={q}>
              <summary>{q}</summary>
              <p>We tailor timing, pricing, and marketing strategy to your land type and local demand.</p>
            </details>
          ))}
        </div>
      </section>

      <section className="bottom-cta section-photo textured-edge">
        <div className="content-width split bottom-grid">
          <form className="mini-form compact">
            <h3>
              READY TO TAKE
              <br />
              THE NEXT STEP?
            </h3>
            <input placeholder="Name" />
            <input placeholder="Email" />
            <input placeholder="Phone" />
            <fieldset>
              <legend>BEST TIME TO CALL?</legend>
              <label><input type="radio" name="time" /> AM</label>
              <label><input type="radio" name="time" /> PM</label>
            </fieldset>
            <button type="button" className="accent-btn">Submit</button>
          </form>
          <div className="next-step-card">
            <h3>
              LOCAL EXPERTISE
              <br />
              WITHIN REACH
            </h3>
          </div>
        </div>
      </section>
    </main>
  )
}
