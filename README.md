# All In One Host

## Overview
**All In One Host** is a comprehensive PHP-based web tools directory featuring over 50 essential tools for web hosting, DNS management, SSL security, and development.  
The application has been redesigned with a modern sidebar layout, categorized tool organization, and custom SVG logos for a professional look.  
DNS tools are prioritized at the top of categories, including integrations like IntoDNS, Ping.eu, SSL Checker, and Why No Padlock as requested.

## User Preferences
- **Communication Style:** Simple, everyday language for easy understanding.

## System Architecture

### Frontend Architecture
- **CSS Organization:** Modular stylesheets with separate files for the public site (`style.css`) and admin interface (`admin.css`).
- **Design System:** Consistent use of CSS custom properties and modern design tokens.
- **Typography:** Uses a system font stack for cross-platform consistency: `-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto`.
- **Layout Strategy:** Container-based max-width layouts (1200px) with responsive padding for adaptability.

### Styling Patterns
- **Reset Approach:** Universal `box-sizing: border-box` reset with normalized margin and padding.
- **Component-Based CSS:** Modular class naming (e.g., `.admin-container`, `.login-form`, `.site-header`).
- **Responsive Design:** Flexible layouts using flexbox and modern CSS techniques.
- **Color System:** Consistent color palette using hex codes for grays (`#f8fafc`, `#e5e7eb`, `#1f2937`).

## Authentication UI
- **Admin Login:** Dedicated, centered login form styled like a card.
- **Session Management:** Logout button included in admin header for easy session control.
- **Access Control:** Separate admin styling indicates role-based interface differentiation.

## Navigation Structure
- **Sticky Header:** Navigation bar with sticky positioning and shadow for improved UX.
- **Brand Identity:** Logo section combining icon and text.
- **Layout Flexibility:** Justified `space-between` navigation layout for optimal distribution.

## External Dependencies
- **CSS Framework Dependencies:**  
  - Uses system default fonts only (Apple System, Segoe UI, Roboto).  
  - No external CSS frameworks like Bootstrap or Tailwind used.  
  - Icon system likely custom or integrated from external icon libraries.

## Browser Compatibility
- **Modern CSS Features:** Utilizes properties like `box-sizing: border-box`, `flexbox`, and `position: sticky`.
- **Cross-Browser Support:** Font stack and CSS designed to work consistently across major operating systems and browsers.
