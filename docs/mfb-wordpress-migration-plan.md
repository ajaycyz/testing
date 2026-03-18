# MFB WordPress Migration Plan (Webflow -> WP Engine)

## Project Goals
- Launch a **new, clean WordPress build** with no reused client assets, plugins, or templates from past projects.
- Migrate and improve content from the current site (**www.mfb-mi.com**) into a clearer, higher-converting structure.
- Maintain a premium but approachable tone: **established, structured, high-craftsmanship, local expertise**.
- Complete build within **40 hours** and target completion **before March 31, 2026**.

## Recommended Platform Stack
- **Hosting:** WP Engine staging environment (new install).
- **Theme/Builder:** Beaver Builder Theme + Beaver Builder plugin.
- **Core plugins (lean set):**
  - SEO: Rank Math or Yoast SEO (pick one)
  - Forms: Gravity Forms or Fluent Forms (pick one)
  - Performance: WP Engine caching + image optimization plugin
  - Security: WP Engine managed + optional lightweight hardening plugin
  - Backup/Migration: WP Engine native backups
- **Do not import old plugin bundles** from any prior projects.

## Brand & Design Direction
Reference tone from Tyton Holdings (without copying): https://tytonholdings.com/

### Visual system
- **Primary background:** White (`#FFFFFF`)
- **Primary text:** Near-black (`#111111`)
- **Brand accent 1:** Orange (use official brand hex)
- **Brand accent 2:** Green (use official brand hex)
- **Neutral accent:** Gray scale (`#6B7280`, `#E5E7EB`)

### Design principles
- Minimal, architectural spacing
- Strong typography hierarchy
- High-quality large-format imagery
- Clear section rhythm and trust signals
- High contrast and accessibility (WCAG AA where possible)

## Site Architecture (Recommended)
Primary Navigation:
1. Home
2. Current Projects
3. Portfolio
4. Custom Homes
5. Semi-Custom
6. Available Homes
7. Developments
8. Process
9. About
10. Testimonials
11. Contact

Utility elements:
- Sticky header CTA: **Schedule a Consultation**
- Footer CTA: **Start Planning Your Forever Home**

## Homepage Structure (Approved Draft)
1. Hero (authority + local confidence)
2. What We Build (4 pathways)
3. Current Projects (momentum + transparency)
4. Featured Completed Homes
5. Building Process (5-step clarity)
6. Why Families Choose Us
7. Testimonials
8. Lead Generation
9. SEO Footer with service areas

## Content Migration Scope
### Migrate from current site
- Core service pages
- About/company credibility content
- Portfolio/completed homes content
- Contact details and service area messaging

### Create net-new content
- Current Projects hub + project detail templates
- Process page with 5-step framework
- Downloadable lead magnet section (Home Building Guide)
- Updated FAQs and stronger CTA copy

### Content standards
- Rewrite for clarity and conversion (not 1:1 pasted everywhere)
- Keep local SEO phrases naturally included (Grand Rapids, Hudsonville, Rockford, Ada)
- Use scannable formatting and trust-building proof points

## SEO & Conversion Requirements
- Keyword map per page (primary + secondary intent)
- Metadata unique per page
- Internal linking between services, projects, and process
- Schema where relevant (Organization, LocalBusiness, FAQ if used)
- Conversion goals:
  - Consultation form submissions
  - Project inquiries
  - Guide downloads

## 40-Hour Build Plan
## Phase 1 — Discovery + Assets (6h)
- Confirm page inventory and must-keep content
- Gather logos, brand hex values, and media
- Approve sitemap and CTA hierarchy

## Phase 2 — Design System + Homepage (10h)
- Build global styles in Beaver Builder theme
- Construct homepage sections with responsive behavior
- Get stakeholder feedback and apply one revision pass

## Phase 3 — Core Page Templates (10h)
- Build reusable section modules for service and portfolio pages
- Build Process, About, Testimonials, Contact
- Configure form(s) and routing notifications

## Phase 4 — Projects + Portfolio Content (8h)
- Build Current Projects archive layout
- Build project detail template (gallery, timeline, video, CTA)
- Populate initial content set

## Phase 5 — QA, Performance, SEO, Launch Prep (6h)
- Mobile/tablet/desktop QA
- Form testing + email deliverability checks
- On-page SEO baseline + redirects
- Final stakeholder walkthrough and punch list

Total: **40h**

## March Delivery Timeline (Suggested)
- **Week of March 18, 2026:** Discovery + homepage build
- **Week of March 25, 2026:** Inner pages + project templates + QA
- **Target completion:** **March 30, 2026**

## Risks & Mitigations
- **Risk:** Missing media/content for project pages  
  **Mitigation:** Use placeholders + required content checklist by page.
- **Risk:** Scope creep from custom functionality  
  **Mitigation:** Keep MVP to content + conversion; defer advanced features.
- **Risk:** Delays in approvals  
  **Mitigation:** Timeboxed review windows (24-48h) and one consolidated revision round.

## Definition of Done
- Fully responsive staging site on WP Engine
- All main nav pages built and populated
- Forms and CTAs functioning and routed
- Baseline SEO implemented
- No legacy client assets/plugins carried into build
- Stakeholder sign-off complete

## Optional Enhancements (Post-MVP)
- Interactive lot map for developments
- Client portal for build progress updates
- Video-first project storytelling blocks
- Email nurture sequence for guide download leads
