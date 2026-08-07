# 📖 Skill: CSS Responsive Design & Keyframe Animations

## Overview
This skill provides blueprints for modern responsive layouts, variable systems, glassmorphism UI components, and butter-smooth CSS keyframe micro-animations tailored for e-commerce sites.

---

## 🚀 Core CSS Architecture Rules

### 1. Root Variable Palette
Define project tokens at the root level for easy dark/light adjustments:
```css
:root {
  --primary-gold: #d4af37;
  --primary-gold-hover: #b89628;
  --bg-dark: #0f172a;
  --surface-glass: rgba(255, 255, 255, 0.08);
  --border-glass: rgba(255, 255, 255, 0.18);
  --text-light: #f8fafc;
  --text-muted: #94a3b8;
  --radius-lg: 16px;
  --radius-md: 8px;
  --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
```

### 2. Glassmorphism Card System
```css
.glass-panel {
  background: var(--surface-glass);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid var(--border-glass);
  border-radius: var(--radius-lg);
  box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
}
```

### 3. Keyframe Animations & Hover Effects
```css
@keyframes pulseGlow {
  0%, 100% {
    box-shadow: 0 0 10px rgba(212, 175, 55, 0.2);
  }
  50% {
    box-shadow: 0 0 25px rgba(212, 175, 55, 0.6);
  }
}

.glow-on-hover:hover {
  animation: pulseGlow 2s infinite;
}
```

### 4. Responsive Breakpoint Standards
```css
/* Mobile first defaults */
.container {
  width: 100%;
  padding-right: 1rem;
  padding-left: 1rem;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 768px) {
  .container { max-width: 720px; }
}

@media (min-width: 1024px) {
  .container { max-width: 960px; }
}

@media (min-width: 1280px) {
  .container { max-width: 1200px; }
}
```
