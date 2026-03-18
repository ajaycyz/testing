# MFB Fresh Builder Theme

This custom WordPress theme implements the requested MFB site functionality with a clean build suitable for WP Engine staging.

## Included functionality
- Beaver Builder-compatible custom theme shell.
- Homepage sections matching strategy:
  - Hero + trust strip
  - What We Build pathways
  - Current Projects grid
  - Completed Homes grid
  - 5-step process section
  - Value proposition list
  - Testimonials
  - Lead generation form
- Custom post types:
  - `mfb_project` (Current Projects)
  - `mfb_home` (Portfolio/Completed Homes)
  - `mfb_testimonial`
- Custom meta boxes for project stats, status, timeline, video URL, and client/location fields.
- Lead form submission handler that emails the WP admin address.

## Setup checklist
1. Upload theme to `/wp-content/themes/mfb-fresh`.
2. Activate the theme in **Appearance > Themes**.
3. Create and assign menus to `Primary` and `Footer` locations.
4. Create pages for all top-level nav targets (Home, Process, About, etc.).
5. Set homepage under **Settings > Reading** to a static page using this theme's `front-page.php`.
6. Add Current Projects, Completed Homes, and Testimonials posts to populate homepage sections.
7. Update admin email in **Settings > General** so lead form notifications route correctly.

## Notes
- Built to remain independent of legacy plugins or reusable client assets.
- Can be further styled in Beaver Builder while keeping this architecture.
