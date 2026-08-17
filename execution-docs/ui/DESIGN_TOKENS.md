# Design Tokens

Document ID: UI-DESIGN-TOKENS
Status: Accepted
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/ui-ux/README.md
Dependencies: DESIGN_SYSTEM.md
Next Documents: COMPONENT_STANDARDS.md

Purpose: define the canonical visual values. Implementation names may match the
CSS framework, but their semantic meaning and values must remain consistent.

## Color

| Token | Light value | Use |
|---|---:|---|
| primary | `#16324F` | Brand, navigation, secondary emphasis |
| primary-hover | `#10263D` | Primary hover/active |
| accent | `#F59E0B` | Main CTA and commercial emphasis |
| accent-hover | `#D97706` | Accent hover/active |
| background | `#F6F7F9` | Page background |
| surface | `#FFFFFF` | Cards, panels, inputs |
| text | `#17202A` | Primary text |
| text-muted | `#667085` | Supporting text |
| border | `#D9DEE7` | Dividers and control borders |
| success | `#16845B` | Successful/available |
| warning | `#D97706` | Warning/attention |
| error | `#D92D20` | Error/destructive |
| info | `#2563EB` | Informational state |

Dark-mode foundation, when approved: background `#0F1720`, surface `#17212B`,
surface-raised `#202C38`, text `#F3F5F7`, text-muted `#A7B0BC`, border
`#344250`. Semantic status and accent colors must be contrast-tested per use.

## Typography

Use `Vazirmatn` first, followed by a suitable Persian/system sans-serif fallback.
Weights: 400, 500, 600 and 700. Base body is 16px; dense admin copy may be 14px.
Page title is 28–32px, section title 20–24px, card title 16–18px and label/help
text 12–14px. Prices use consistent Persian-digit and currency formatting.

## Geometry

Spacing follows a 4px grid: `4, 8, 12, 16, 24, 32, 48, 64`. Standard control
height is 44px; dense admin control height is 36px. Control radius is 8px and
card radius is 12px. Shadows are subtle and reserved for elevation, not borders.
