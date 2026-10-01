# Arinoz - IT Solutions & Technology Website Template

## Overview
**Arinoz** is a corporate website template tailored for IT solutions, software development, cloud services, cyber security, managed IT services, and UI/UX design. The codebase consists of static HTML5, CSS3, and JavaScript pages built on top of Bootstrap 5 with custom corporate theming and interactive UI components.

---

## Tech Stack & Core Libraries
- **HTML5 & CSS3**: Semantic markup with responsive layouts.
- **Bootstrap 5.3.3**: Grid system, utilities, responsive layout containers (`css/bootstrap.min.css`).
- **Typography / Google Fonts**:
  - Headings: `Outfit` (`sans-serif`, weights 300 to 800)
  - Body / Text: `DM Sans` (`sans-serif`, weights 400, 500, 700)
- **Icons**:
  - Font Awesome 6.5.2 (CDN + `css/fontawesome-all.css`)
  - Flaticon (`css/flaticon.css`)
  - Linear Icons (`css/linear.css`)
- **JavaScript & Interactive Plugins**:
  - jQuery 3.x (`js/jquery.js`) & jQuery UI (`js/jquery-ui.js`)
  - Carousels / Sliders: Owl Carousel (`owl.js`), Swiper (`swiper.min.js`), BxSlider (`bxslider.js`), Revolution Slider (`plugins/revolution/`)
  - Lightbox / Modal: Fancybox (`jquery.fancybox.js`)
  - Animations: WOW.js (`wow.js`), Animate.css (`css/animate.css`), Appear.js (`appear.js`)
  - Filtering & Forms: MixItUp (`mixitup.js`), Select2 (`select2.min.js`), jQuery Validate (`jquery.validate.min.js`)
  - Main theme controller: `js/script.js`

---

## Design System & Theme Variables
Root CSS variables are declared in `css/style.css` and leveraged throughout `css/custom.css`:

### Color Palette
| Variable | Value | Purpose |
| :--- | :--- | :--- |
| `--theme-color1` | `#0a2a5e` | Primary brand deep navy blue (headers, primary buttons, accents) |
| `--theme-color2` | `#f7941d` | Secondary accent amber/orange (highlights, hover states, active badges) |
| `--theme-color3` | `#f4f5f8` | Neutral light background for cards, service sections, alternating blocks |
| `--theme-color-light` | `#ffffff` | Pure white background |
| `--theme-color-dark` | `#000000` | Dark background |
| `--text-color` | `#6A6F78` | Standard body copy text color |
| `--headings-color` | `var(--theme-color1)` | Headings default color |

### Typography
- **Headings**: `var(--title-font)` -> `"Outfit", sans-serif`
- **Body**: `var(--text-font)` -> `"DM Sans", sans-serif`
- **Font Sizes**:
  - H1: `48px`
  - H2: `36px`
  - H3: `24px`
  - H4: `20px`
  - H5: `18px`
  - H6: `16px`
  - Body: `16px` (Line height: `1.7`)

---

## Directory & File Structure
```
Arinoz_Template/
├── our-services.html                     # Services overview / directory page
├── page-service-details-app-development.html  # Software & App Development detail page
├── page-service-details-cloud.html            # Cloud Computing & Infrastructure detail page
├── page-service-details-managed-IT-services.html # Managed IT Services detail page
├── page-service-details-product-dev.html      # Product Development detail page
├── page-service-details-security.html         # Cyber Security & Compliance detail page
├── page-service-details-ui-ux.html            # UI/UX Design & Prototyping detail page
├── css/
│   ├── style.css                         # Base vendor & theme styles + CSS variables
│   ├── custom.css                        # Arinoz-specific overrides and bespoke component styles
│   ├── bootstrap.min.css                 # Bootstrap 5.3.3
│   ├── fontawesome-all.css / flaticon.css# Icon library stylesheets
│   └── owl.css / swiper.min.css / ...    # Plugin-specific stylesheets
├── js/
│   ├── script.js                         # Core layout, sticky header, mobile nav & slider logic
│   ├── jquery.js                         # jQuery core library
│   └── [plugins].js                      # Carousels, modals, validators
├── images/                               # Brand logos (Arinoz_Logo.png), service graphics, icons
├── fonts/                                # Webfonts and icon glyphs
├── assets/ / cdn-cgi/ / UI/              # Assets and staging folders
└── plugins/                              # Complex plugins (Revolution Slider)
```

---

## Architecture & Layout Patterns

### 1. Global Header (`.main-header`)
- **Header Top (`.header-top`)**: Contact email (`info@arinoz.com`), location (`Pune, MH`), social links.
- **Main Box (`.main-box`)**: Logo (`images/Arinoz_Logo.png`), primary navigation (`.navigation`), call-to-action button, search toggle.
- **Sticky Header (`.sticky-header`)**: Clones navigation dynamically via `js/script.js` upon scroll.
- **Mobile Menu (`.mobile-menu`)**: Responsive drawer triggered via `.mobile-nav-toggler`.

### 2. Service Detail Page Layout (`.service_details_sec`)
Service detail pages use a 2-column grid (`display: grid; grid-template-columns: 300px 1fr; gap: 45px;`):
- **Sidebar (`.service_sidebar`)**:
  - Navigation list (`.service_list`): Direct links to all 6 service pages with active state styling.
  - Download brochure / contact widget.
  - Quick contact or help banner.
- **Content Area (`.service_details_content`)**:
  - Featured image / banner.
  - Main service description & feature highlights.
  - Tech stack cards or process workflow steps (`.process_choose_sec`, `.technology-section`).
  - Accordion / FAQ section (`.faq_sec`).

---

## Development Guidelines

1. **Styling Edits**:
   - Place all custom rules, overrides, and new component styling inside [css/custom.css](file:///c:/Users/smrut/Desktop/Arinoz_Template/css/custom.css).
   - Avoid directly editing [css/style.css](file:///c:/Users/smrut/Desktop/Arinoz_Template/css/style.css) unless modifying global root variables (`:root`).
   - Always reuse the CSS custom properties (`var(--theme-color1)`, `var(--theme-color2)`, `var(--text-font)`, etc.) to maintain visual harmony.

2. **Linking Consistency**:
   - Note: The services catalog file is named [our-services.html](file:///c:/Users/smrut/Desktop/Arinoz_Template/our-services.html), but service details pages reference `page-services.html` in breadcrumbs and navigation. When updating links, ensure they point to [our-services.html](file:///c:/Users/smrut/Desktop/Arinoz_Template/our-services.html) (or maintain an alias / rename if standardizing).
   - Keep sidebar links in [page-service-details-*.html](file:///c:/Users/smrut/Desktop/Arinoz_Template/) synchronized whenever adding or updating service offerings.

3. **Responsiveness**:
   - Ensure components adapt smoothly across desktop, tablet (`max-width: 991px`), and mobile (`max-width: 767px`).
   - The service sidebar collapses above or below main content on smaller viewports.

4. **DOM Structure & Classes**:
   - Wrap page content within `.page-wrapper`.
   - Wrap container blocks in `.auto-container` (or Bootstrap `.container` / `.container-fluid`).
