# Decision Log

## 1. Purpose

This document stores important architectural, business, technical, operational, and product decisions made during the lifecycle of "فروشگاه صنعت جوان".

The project uses AI-assisted development, and future Codex sessions may not know why certain choices were made. This file preserves historical reasoning so future developers, maintainers, and AI tools can understand the context behind major decisions.

This document acts as historical memory, decision history, architectural reasoning log, and future reference.

## 2. Decision Logging Rules

- Every major project decision must be logged here.
- Every decision entry must include date, status, decision summary, reasoning, future impact, and notes.
- Decisions should be concise but meaningful.
- This document should be treated as append-only.
- Old decisions must not be silently removed.
- Deprecated decisions must be marked as deprecated, not deleted.
- Open decisions must be marked clearly and revisited when resolved.
- If a future decision changes business rules, architecture, product scope, or technical direction, the related source-of-truth documents must also be updated.

## 3. Decision Status Types

- active: The decision is currently valid and should guide future work.
- deprecated: The decision is no longer valid, but remains in the log for historical context.
- experimental: The decision is being tested and should not be treated as permanent.
- open: The decision has not been finalized.
- postponed: The decision is intentionally delayed until more information is available.

## 4. Initial Project Decisions

### DECISION-001 - Documentation-first architecture

- Date: 2026-05-30
- Status: active
- Decision: The project will follow a documentation-first architecture approach.
- Reasoning: The project is AI-assisted and requires stable long-term knowledge management. Documentation reduces ambiguity and helps future Codex sessions understand project context without relying on chat history.
- Future Impact: Major systems, workflows, and decisions must be documented before or during implementation and updated after meaningful changes.
- Notes: Related documents include PROJECT_VISION.md, PRODUCT_SCOPE.md, BUSINESS_RULES.md, SYSTEM_GLOSSARY.md, and future system documents.

### DECISION-002 - English documentation policy

- Date: 2026-05-30
- Status: active
- Decision: Project documentation should be written in English for current source-of-truth documents.
- Reasoning: English improves consistency, technical clarity, and future AI/Codex compatibility across architecture, product, business, and implementation discussions.
- Future Impact: Future Markdown documentation should use English unless a later source-of-truth decision changes this policy.
- Notes: Older documentation may contain Persian rules; current source-of-truth creation tasks require English documentation.

### DECISION-003 - Modular architecture direction

- Date: 2026-05-30
- Status: active
- Decision: The platform will follow a modular architecture direction.
- Reasoning: The platform must support commerce, inventory, profit calculation, wallet, ticketing, approvals, reporting, imports, AI-assisted features, and future digital/subscription products without becoming tightly coupled.
- Future Impact: Major business areas should be separated into clear modules with their own responsibilities and documentation.
- Notes: Modularity should support maintainability without over-engineering phase 1.

### DECISION-004 - Docker-first development

- Date: 2026-05-30
- Status: active
- Decision: The project will use a Docker-first development and deployment direction.
- Reasoning: Docker provides consistent development and deployment environments and supports app, database, queue worker, scheduler, optional Redis, and future Node services.
- Future Impact: Local development and future deployment should be designed around predictable containerized services.
- Notes: Phase 1 Docker setup should remain practical and avoid unnecessary production-grade complexity.

### DECISION-005 - Laravel-first backend strategy

- Date: 2026-05-30
- Status: active
- Decision: Laravel/PHP will be the core backend and main business system.
- Reasoning: Laravel supports fast development, authentication, authorization, admin workflows, products, orders, queues, jobs, notifications, policies, validation, and future APIs.
- Future Impact: Core business logic should initially live in Laravel unless a specific future service has a clear reason to exist outside it.
- Notes: Laravel should own phase 1 commerce, orders, payment coordination, inventory workflows, approvals, ticketing, wallet foundation, and reporting foundation.

### DECISION-006 - Node.js reserved for specialized future services

- Date: 2026-05-30
- Status: active
- Decision: Node.js will be reserved for specialized future services and should not be forced into phase 1.
- Reasoning: Introducing Node.js too early would add unnecessary complexity when Laravel can handle the core business system.
- Future Impact: Node.js may be used later for realtime features, websocket services, special workers, automation, AI-related processing, or heavy import/image processing if needed.
- Notes: Any Node.js service must have a documented business or technical reason.

### DECISION-007 - No realtime-first architecture

- Date: 2026-05-30
- Status: active
- Decision: The platform will not use realtime-first architecture in phase 1.
- Reasoning: The project does not currently require realtime complexity. Normal requests, scheduled sync, queued jobs, and manual admin actions are enough for the current scope.
- Future Impact: Realtime systems should not be introduced unless a clear future feature requires them.
- Notes: Inventory and accounting sync are intentionally not real-time.

### DECISION-008 - No marketplace support

- Date: 2026-05-30
- Status: active
- Decision: Marketplace and multi-vendor behavior are not part of the product vision.
- Reasoning: The business model is focused on direct commerce for "فاطر صنعت جوان", not third-party sellers.
- Future Impact: Product, order, admin, database, and financial design should not introduce vendor ownership, vendor payouts, or marketplace assumptions.
- Notes: If this ever changes, PROJECT_VISION.md, PRODUCT_SCOPE.md, BUSINESS_RULES.md, DATABASE_VISION.md, and panel docs must be updated.

### DECISION-009 - Persian-only platform

- Date: 2026-05-30
- Status: active
- Decision: The platform user experience will be Persian-only.
- Reasoning: The target market is Iranian users only.
- Future Impact: UI, content, admin workflows, customer panel, and documentation about product behavior should not assume multi-language support.
- Notes: Technical terms may remain English in documentation where appropriate.

### DECISION-010 - Rial/Toman-only financial system

- Date: 2026-05-30
- Status: active
- Decision: The financial system will support Iranian currency only: Rial and Toman.
- Reasoning: The project targets the Iranian market and does not require multi-currency complexity.
- Future Impact: Financial entities, reports, wallet behavior, payment logic, and profit calculations should not assume foreign currency support.
- Notes: Currency handling must remain clear and consistent in future financial documentation.

### DECISION-011 - Website-only profit calculation

- Date: 2026-05-30
- Status: active
- Decision: Profit calculation applies only to sales completed through the website and payment gateway.
- Reasoning: Physical store operations are outside website business scope.
- Future Impact: Physical Store Sales, offline operations, and unsold physical inventory must not enter website profit calculation.
- Notes: This decision protects financial clarity between website business activity and physical store operations.

### DECISION-012 - Base Cost profit model

- Date: 2026-05-30
- Status: active
- Decision: Base Cost must be stored when a product enters the Website Sale cycle and used in profit logic.
- Reasoning: Inventory inflation and market price increase should not count as operational profit.
- Future Impact: Financial history must preserve Base Cost snapshots and avoid corrupting old profit calculations when prices change later.
- Notes: Inventory Appreciation is not Profit.

### DECISION-013 - Manual approval workflow support

- Date: 2026-05-30
- Status: active
- Decision: The platform must support manual approval workflows for selected products, categories, orders, or scopes.
- Reasoning: Inventory uncertainty and pricing volatility may require human verification before invoice confirmation or payment flow continues.
- Future Impact: Admin Panel, order workflow, database states, notifications, and audit logs should support approval behavior.
- Notes: Future Telegram or email approval workflows may be added later.

### DECISION-014 - Dynamic payment freeze system

- Date: 2026-05-30
- Status: active
- Decision: The platform must support Dynamic Freeze for temporary payment or order-flow disabling.
- Reasoning: Iranian market volatility requires operational control tools for high-risk pricing or inventory situations.
- Future Impact: Admins must be able to freeze or unfreeze entire platform, section, category, subcategory, or product scopes.
- Notes: Freeze actions are reversible operational controls, not product deletion.

### DECISION-015 - Future digital/subscription support

- Date: 2026-05-30
- Status: active
- Decision: The platform should remain ready for future digital products, subscription products, membership access, and premium content visibility.
- Reasoning: The platform is intended to grow beyond phase 1 physical product sales into premium access and content systems.
- Future Impact: Product, database, admin panel, user panel, wallet, and access-control design should leave room for digital access.
- Notes: Digital and subscription products are future-phase features, not phase 1 core implementation.

### DECISION-016 - AI-assisted development workflow

- Date: 2026-05-30
- Status: active
- Decision: The project will use AI-assisted development with clear documentation and project rules.
- Reasoning: The project is designed around human + AI collaboration, and future Codex sessions need durable context.
- Future Impact: Prompts, implementation, architecture changes, and system design should be aligned with documented source-of-truth files.
- Notes: AI should not rely on chat memory when documentation exists.

### DECISION-017 - Documentation as source of truth

- Date: 2026-05-30
- Status: active
- Decision: Documentation is treated as a source of truth for product, business, architecture, terminology, and technical decisions.
- Reasoning: This prevents architecture drift, inconsistent implementations, and repeated rediscovery of project context.
- Future Impact: Any meaningful change must update related documentation before it becomes a stable project behavior.
- Notes: System documents must include Changelog sections.

### DECISION-018 - No public API in phase 1

- Date: 2026-05-30
- Status: active
- Decision: The platform will not expose a public API in phase 1.
- Reasoning: Public API support would increase surface area, security requirements, versioning needs, and implementation complexity before there is a business need.
- Future Impact: The architecture should remain API-ready for future mobile or frontend needs, but public third-party API behavior is excluded for now.
- Notes: Internal integrations are allowed when they serve project needs.

### DECISION-019 - Simple phase-1 discount system

- Date: 2026-05-30
- Status: active
- Decision: Phase 1 will use a simple discount system that can be extended later.
- Reasoning: Early commerce logic should avoid overengineering while still supporting basic promotional needs.
- Future Impact: The discount system should not block future advanced discount engine, campaigns, scope targeting, or analytics.
- Notes: Advanced discount behavior is future scope.

### DECISION-020 - Future mobile app support

- Date: 2026-05-30
- Status: active
- Decision: The architecture should remain ready for a future mobile application.
- Reasoning: Mobile support may become important later, even though phase 1 does not require a mobile app.
- Future Impact: Backend, authentication, APIs, media, notifications, and user panel behavior should avoid choices that would block future mobile integration.
- Notes: Future mobile app architecture is an open decision.

## 5. Future Decision Guidelines

Future decisions should be added as new entries using the next available decision number.

Each decision should include:

- Date.
- Status.
- Decision.
- Reasoning.
- Future Impact.
- Notes.

Decision entries should explain why the decision exists, not only what was chosen. If a decision affects multiple source-of-truth documents, those documents must be updated in the same documentation pass.

## 6. Open Decisions

Current open decisions include:

- Final frontend approach.
- Final admin panel technology approach.
- Final database choice between MySQL and MariaDB.
- Whether Redis is needed immediately in phase 1.
- Final production storage strategy.
- Final search engine if database search becomes insufficient.
- Final deployment topology.
- Exact Hesabfa integration behavior and sync frequency.
- Future AI service architecture.
- Future mobile app architecture and API boundaries.
- Exact role and permission model.
- Exact wallet ledger rules.
- Exact audit log package or custom audit structure.
- Exact taxonomy structure for product type, vehicle compatibility, brand, and future classifications.

Open decisions should be converted into decision entries when resolved.

## 7. Deprecated Decisions

No deprecated decisions have been recorded yet.

Deprecated decisions must remain in this document for historical context. They should be marked with status deprecated and include a note explaining what replaced them.

## 8. Changelog

- 2026-05-30: Initial decision log document created.
