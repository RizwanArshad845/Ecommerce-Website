---
name: code-review-security-audit
description: Checklists and methodologies for reviewing code quality, verifying escaping/sanitization, testing accessibility (ARIA), and preventing security vulnerabilities.
version: 1.0.0
---

# 📖 Skill: Code Review & Security Audit

## Overview
Checklist and auditing procedures for verifying security, accessibility, responsiveness, and performance across HTML, CSS, JS, and PHP.

## When to Use
Use when reviewing PRs, auditing code before deployment, or verifying security posture.

## Audit Checklist
1. **PHP Security:** Are all outputs escaped (`esc_html`, `esc_attr`, `esc_url`, `wp_kses_post`)? Are nonces verified?
2. **HTML Accessibility:** Is there a single `<h1>` tag? Are `alt` attributes present? Are ARIA attributes valid?
3. **CSS Quality:** Are responsive breakpoints handled without layout overflow?
4. **JS Performance:** Are event listeners attached cleanly without memory leaks?
