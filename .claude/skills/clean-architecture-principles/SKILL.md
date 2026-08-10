---
name: clean-architecture-principles
description: SOLID, separation of concerns, and DRY guidelines for organizing PHP, JS, and CSS in this theme.
version: 1.0.0
---

# 📖 Skill: Clean Architecture Principles

## Overview
Principles for keeping `functions.php`, `inc/`, `patterns/`, `css/`, and `js/` modular and loosely coupled as the theme grows.

## When to Use
Use when adding a new module, refactoring existing code, or judging whether logic belongs in the file it's currently in.

## Instructions
1. Keep `functions.php` a thin bootstrap — move logic into focused `inc/*.php` modules by responsibility (e.g. `woocommerce-integration.php`).
2. One responsibility per function/file; extract when a file mixes data-fetching, rendering, and behavior.
3. Prefer WordPress hooks/filters over direct calls between modules to avoid tight coupling.
4. Consolidate duplicated CSS/JS into a shared module (`css/modules/`) instead of copy-pasting across files.
