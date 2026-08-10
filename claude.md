# CLAUDE.md

Refer to [claude.md](claude.md) for full workspace instructions, subagent roles, and skill references.

- **Theme Root:** `c:\Users\arsha\Local Sites\national-gold-melamine\app\public\wp-content\themes\vw-modern-ecommerce`
- **Agents:**
  - `@software-architect` — System Architecture & Design
  - `@clean-architecture` — SOLID, Separation of Concerns & DRY Enforcement
  - `@code-writer` — Production Code Implementation
  - `@code-reviewer` — Quality, Security & Escaping Audit
  - `@mobile-responsive-reviewer` — Breakpoint, Touch Target & Mobile Flow Audit
  - `@performance-optimizer` — Asset Loading, Image & Query Performance Audit
  - `@css-specialist` — CSS Layout, Responsive & Glassmorphism
  - `@html-specialist` — HTML5 & Block Template Structure
  - `@js-specialist` — Vanilla JS Interactivity & Fetch API
  - `@php-specialist` — WordPress PHP Architecture & Patterns
  - `@woocommerce-specialist` — WooCommerce Templates, Hooks & Cart/Checkout
- **Agents Directory:** `.claude/agents/`
- **Subagents Directory:** `.claude/subagents/`
- **Skills Directory:** `.claude/skills/`
  - Includes: `clean-architecture-principles`, `mobile-responsive-testing`, `performance-optimization`, `woocommerce-customization-patterns` (alongside existing security, accessibility, and integration skills)

*Note: In Claude CLI, type `/reload-skills` to reload subagent and skill definitions.*
