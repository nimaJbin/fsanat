# Fsanat Documentation

This directory contains the source-of-truth documentation for "فروشگاه صنعت جوان".

The project is documentation-first. Codex and future contributors must read the relevant documents before changing product behavior, business rules, architecture, database structure, workflows, prompts, or system design.

## Structure

- `core/`: Project-level source-of-truth documents, including rules, vision, scope, business rules, glossary, decisions, database vision, and technical stack decisions.
- `systems/`: One Markdown document per major business or technical system.
- `architecture/`: High-level software architecture documents and architectural direction.
- `database/`: Database-specific design, schema planning, data modeling, and persistence guidance.
- `ui-ux/`: UI/UX vision, user flows, design system notes, and panel experience documents.
- `deployment/`: Docker, deployment, server, environment, CI/CD, and operational documents.
- `roadmap/`: Phase planning, milestones, MVP planning, and future delivery roadmap.
- `changelog/`: Global changelog and release/change tracking documents.
- `prompts/`: Reusable Codex prompts, task prompts, and AI workflow prompts.

## Documentation Rules

- Documentation is the source of truth.
- Every major system should have a dedicated document under `systems/`.
- Every meaningful change must update the related documentation.
- Every system document must include a `Changelog` section.
- Codex must read the relevant docs before making changes.
