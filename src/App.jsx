const cards = [
  {
    number: '01',
    title: 'Supply & Demand',
    body: 'Exposing your property to the most buyers and appealing to them.',
  },
  {
    number: '02',
    title: 'Pricing Strategy',
    body: 'The right value for optimal market results.',
  },
]

const process = [
  { number: '01', title: 'Prepare', body: 'Professional photos and strategy setup to ensure listing quality.' },
  { number: '02', title: 'Launch', body: 'Post to active channels and target motivated buyers.' },
]

const faqs = [
  'WHEN IS THE BEST TIME TO TRY AND SELL MY PROPERTY?',
  'HOW LONG DOES A PROPERTY USUALLY TAKE TO SELL?',
  'HOW ARE YOU GOING TO FIND A BUYER FOR MY PROPERTY?',
  'HOW SOON CAN YOU HAVE MY PROPERTY ON THE MARKET?',
  'DO YOU EVER SELL RESIDENTIAL OR COMMERCIAL PROPERTIES?',
]

export default function App() {
  return (
    <div className="page">
      <section className="hero section-image">
        <header className="topbar">
          <div className="logo">
            <span>LAND FOR SALE</span>
            <strong>LANDGUYS</strong>
          </div>
          <div className="menu">☰</div>
        </header>
        <div className="hero-content">
          <p className="tagline">EFFORTLESSLY SELL YOUR LAND FASTER FOR <em>TOP MARKET PRICE.</em></p>
          <button className="btn">SEE HOW LUKE WORKS</button>
        </div>
      </section>

      <section className="expertise-strip">
        <strong>LOCAL EXPERTISE</strong> WITHIN REACH
      </section>

      <section className="section dark center">
        <h2>LEARN ABOUT LUKE’S PROCESS FOR GETTING THE OPTIMAL PRICE FOR YOUR PROPERTY</h2>
        <div className="card-grid">
          {cards.map((item) => (
            <article key={item.number} className="video-card">
              <div className="play">▶</div>
              <h3>{item.number}. {item.title}</h3>
              <p>{item.body}</p>
            </article>
          ))}
        </div>
      </section>

      <section className="two-col section-image muted">
        <div className="placeholder image-left" />
        <div className="panel">
          <h3>WHAT TO EXPECT AT A LISTING APPOINTMENT</h3>
          <ol>
            <li>Discover your motivation</li>
            <li>Create a custom marketing plan</li>
            <li>Price your property</li>
          </ol>
          <button className="btn">Call Luke</button>
        </div>
      </section>

      <section className="process section dark">
        <div className="process-intro">
          <h3>THE LISTING PROCESS</h3>
          <p>Each listing requires an individual approach to position it to the market.</p>
        </div>
        <div className="process-cards">
          {process.map((item) => (
            <article key={item.number} className="process-card">
              <h4>{item.number} {item.title}</h4>
              <p>{item.body}</p>
            </article>
          ))}
        </div>
      </section>

      <section className="cta-form section muted">
        <div>
          <h3>TAKE ADVANTAGE OF A STRONG SELLER’S MARKET</h3>
          <p>Fill out your details and we’ll estimate your land value quickly.</p>
        </div>
        <form>
          <h4>FIND OUT THE VALUE OF YOUR PROPERTY</h4>
          <input placeholder="Name" />
          <input placeholder="Email" />
          <input placeholder="Phone" />
          <button className="btn" type="button">Get Your Evaluation</button>
        </form>
      </section>

      <section className="stats section dark">
        <div><small>LISTING STATS</small><strong>80% Growth</strong></div>
        <div><small>Increase in sale volume</small><strong>64% Increase</strong></div>
        <div><small>In sales</small><strong>#1 In Wisconsin</strong></div>
      </section>

      <section className="reviews section textured">
        <h3>FIRSTHAND EXPERIENCES FROM PAST CLIENTS</h3>
        <div className="review-grid">
          <article><h4>PLEASURE TO WORK WITH</h4><p>Luke consistently provided value and guidance throughout the process.</p></article>
          <article><h4>PROFESSIONAL</h4><p>Communication and marketing strategy were excellent from start to finish.</p></article>
          <article><h4>VERY KNOWLEDGEABLE</h4><p>Helped us get top value for our property and close with confidence.</p></article>
        </div>
      </section>

      <section className="bio section-image">
        <div className="placeholder image-left" />
        <div className="panel">
          <h3>SOUTHEASTERN WISCONSIN LUKE WESSEL</h3>
          <p>
            Land specialist focused on pricing accuracy, targeted marketing and negotiation.
            Years of local expertise helping owners sell land confidently.
          </p>
          <button className="btn">Call Luke</button>
        </div>
      </section>

      <section className="faq section dark">
        <h3>YOU HAVE QUESTIONS. WE HAVE ANSWERS.</h3>
        {faqs.map((q) => (
          <details key={q}>
            <summary>{q}</summary>
            <p>Answer content placeholder matching the original layout style.</p>
          </details>
        ))}
      </section>

      <section className="bottom-contact section-image">
        <form>
          <h3>READY TO TAKE THE NEXT STEP?</h3>
          <input placeholder="Name" />
          <input placeholder="Email" />
          <input placeholder="Phone" />
          <button className="btn" type="button">Submit</button>
        </form>
        <div className="contact-promo">
          <h3>LOCAL EXPERTISE WITHIN REACH</h3>
        </div>
      </section>
    </div>
  )
}
