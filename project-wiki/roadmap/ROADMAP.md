# Roadmap

## 1. Purpose

This document defines the long-term roadmap for "فروشگاه صنعت جوان".

The roadmap describes phase planning, implementation priorities, system maturity direction, and future expansion vision for the platform.

This document is a strategic evolution map, not a strict deadline-based project plan. It should guide delivery direction, maturity planning, and future Codex sessions without forcing artificial dates or implementation details.

## 2. Roadmap Philosophy

The roadmap must prioritize stability before expansion.

Core roadmap principles:

- Build the business foundation first.
- Prioritize operational correctness over feature quantity.
- Keep phase 1 practical and maintainable.
- Avoid premature complexity.
- Grow system-by-system instead of adding disconnected features.
- Keep documentation as the source of truth.
- Preserve modular architecture and future scalability.
- Add automation only after manual workflows are clear.

The platform should mature through clear phases. Each phase should improve the system without breaking the documented business model, financial rules, operational boundaries, or technical direction.

## 3. Project Evolution Vision

"فروشگاه صنعت جوان" starts as a custom physical-product commerce platform for the Iranian market.

The long-term direction is to evolve into a modular commerce ecosystem that can support:

- Physical products.
- Digital products.
- Subscription products.
- Wallet systems.
- Ticketing and customer support.
- Operational workflows.
- Financial reporting.
- Inventory-aware controls.
- AI-assisted systems.
- Analytics.
- Automation.
- Future mobile applications.

The platform must remain B2C-first in the initial direction. B2B and wholesale support may be researched later, but marketplace and multi-vendor behavior are not part of the roadmap.

## 4. Phase 1 — Core Commerce Foundation

Phase 1 should establish the core commerce and operational foundation.

Primary goals:

- Authentication.
- Customer registration and login.
- Profile completion before checkout.
- Admin Panel foundation.
- User Panel foundation.
- Product System.
- Category And Taxonomy System.
- Inventory System.
- Order Workflow.
- Payment gateway integration.
- Approval workflows.
- Dynamic Freeze foundation.
- Reporting foundation.
- Ticketing foundation.
- Wallet foundation.
- Profit calculation foundation.
- Base Cost logic.
- Docker-first infrastructure.
- Documentation-first workflow.

Phase 1 priorities:

- Operational stability.
- Maintainability.
- Business correctness.
- Clear order and payment flow.
- Traceable financial foundation.
- Inventory-aware checkout behavior.
- Admin-first workflows.
- Practical customer support.
- Clean system documentation.

Phase 1 should not chase feature quantity. It should create a reliable platform foundation that later phases can extend safely.

## 5. Phase 2 — Operational Maturity

Phase 2 should improve day-to-day operations after the core commerce foundation is stable.

Possible focus areas:

- Advanced operational reporting.
- Better admin dashboards.
- Improved inventory workflows.
- Inventory sync maturity.
- Import pipeline maturity.
- Dynamic Freeze maturity.
- Approval workflow improvements.
- Audit system improvements.
- Notification improvements.
- Telegram or email approval workflows.
- Operational alerts.
- Better support visibility.
- Manual cost and financial review improvements.

Phase 2 should make operations easier to monitor, review, and correct. It should reduce manual confusion without turning the platform into an over-engineered automation system too early.

## 6. Phase 3 — Advanced Commerce Features

Phase 3 should expand commerce capability after operational workflows are stable.

Possible focus areas:

- Advanced discount engine.
- Campaign systems.
- Bulk pricing improvements.
- Advanced filtering.
- Advanced search if database search becomes insufficient.
- SEO improvements.
- SEO-friendly taxonomy pages.
- Better product discovery.
- Operational tooling for large catalogs.
- Improved analytics.
- Product and category performance visibility.

Phase 3 should improve sales, discovery, and commerce flexibility while preserving website-only profit rules, Base Cost behavior, inventory controls, and approval workflows.

## 7. Phase 4 — Digital & Subscription Ecosystem

Phase 4 should add future digital and subscription capabilities only after physical commerce is stable.

Possible focus areas:

- Digital products.
- Subscription products.
- Premium content.
- Membership systems.
- Restricted access content.
- Digital delivery workflows.
- Download or content access rules.
- Subscription renewal and expiration behavior.
- Wallet-compatible subscription payments.
- Ticketing support for digital access issues.

Digital and subscription systems must be documented in detail before implementation. They must remain compatible with Auth And Permission System, Product System, Order Workflow, Wallet System, Ticketing System, Reporting System, and future mobile support.

## 8. Phase 5 — AI & Automation Layer

Phase 5 should add AI-assisted and automation features after the platform has enough reliable data and mature workflows.

Possible focus areas:

- AI-generated product content.
- AI-assisted SEO.
- Automatic categorization suggestions.
- Import cleanup suggestions.
- Pricing assistance.
- Sales prediction.
- Inventory forecasting.
- Anomaly detection.
- Operational alerts.
- Support automation.
- Suggested ticket replies.
- Automated reporting summaries.

AI features must remain reviewable. AI must not automatically change financial records, wallet balances, inventory, prices, orders, approvals, freezes, or customer access without documented governance and approval rules.

## 9. Phase 6 — Mobile & Advanced Expansion

Phase 6 should expand platform reach and advanced capabilities when the core system, operations, and data model are mature.

Possible focus areas:

- Mobile application.
- Mobile-ready APIs.
- Push notifications.
- Mobile customer account experience.
- Mobile order visibility.
- Mobile wallet visibility.
- Mobile ticketing.
- Advanced operational tooling.
- Future integrations.
- Advanced analytics and reporting.
- More scalable service boundaries if needed.

Mobile support should build on the Laravel-first backend and documented domain rules. Public API behavior is not part of phase 1 and should only be introduced later if the project vision and source-of-truth documents are updated.

## 10. Technical Roadmap

The technical roadmap should follow the documented stack direction.

Technical direction:

- Laravel/PHP remains the core backend and business system.
- Docker-first infrastructure should support predictable development and deployment.
- A relational database, preferably MySQL or MariaDB, should support orders, inventory, wallet, tickets, reporting, and financial consistency.
- Laravel queues should be planned for imports, notifications, accounting sync, reports, and future AI jobs.
- Redis may be added when queue, cache, session, rate limiting, or background job needs justify it.
- Database search is acceptable in phase 1.
- Meilisearch, Elasticsearch, or OpenSearch may be researched later if search becomes complex.
- Node.js should be reserved for specialized future services where it has a clear technical benefit.
- Realtime architecture is not a phase-1 requirement.
- Future service extraction should happen only when business scale or technical needs justify it.

Technical expansion must remain modular and documented. New infrastructure should not be introduced only because it is fashionable.

## 11. Documentation Roadmap

Documentation is part of the roadmap.

Documentation direction:

- Documentation-first development must continue.
- Every major system should have a dedicated system document.
- Every meaningful system change must update the related documentation.
- Every system document must include a Changelog section.
- Roadmap changes must stay aligned with Product Scope, Business Rules, Decision Log, and system documents.
- Future Codex sessions must read relevant source-of-truth documents before making changes.
- New terminology should be added to System Glossary before it becomes common project language.
- Major decisions should be logged in Decision Log.

Documentation should remain clean, structured, English-language for current source-of-truth files, and suitable for future AI-assisted development.

## 12. Operational Roadmap

The operational roadmap should improve business control and visibility over time.

Future operational improvements may include:

- Telegram approval workflows.
- Email approval workflows.
- Better Hesabfa sync workflows.
- Better sync failure visibility.
- Operational alerts.
- Inventory risk management.
- Dynamic Freeze maturity.
- Import automation improvements.
- Import validation improvements.
- Reporting maturity.
- Audit trail maturity.
- Admin dashboard improvements.
- Support workload visibility.
- Financial review workflows.

Operational improvements should help admins make better decisions without hiding business logic or bypassing approval, financial, inventory, or support rules.

## 13. Open Research Areas

The following areas require future research before implementation commitments:

- AI tooling and provider strategy.
- AI governance and approval boundaries.
- Mobile application strategy.
- Mobile API boundaries.
- Advanced analytics approach.
- Advanced search system selection.
- Caching strategy.
- Redis timing.
- Queue scaling strategy.
- Reporting aggregation strategy.
- Production storage strategy.
- Hesabfa integration details.
- Notification provider choices.
- Telegram workflow design.
- Future frontend approach.
- Future scalability and service extraction.

Research outcomes should be documented in the relevant source-of-truth files before implementation.

## 14. Out of Scope

The roadmap does not include:

- Marketplace support.
- Multi-vendor behavior.
- Multi-language platform behavior.
- Multi-currency financial behavior.
- Realtime-first architecture.
- Physical store sales as website business scope.
- Public API as a phase-1 requirement.
- Full accounting software replacement.
- Enterprise BI system in phase 1.
- Live chat infrastructure as a phase-1 requirement.

Any future change to these boundaries must update Product Vision, Product Scope, Business Rules, Decision Log, and related system documents.

## 15. Open Decisions

The following roadmap decisions are still open:

- Exact phase-1 MVP boundary.
- Exact phase-1 launch readiness checklist.
- Exact order of phase-1 implementation.
- Exact admin panel technology approach.
- Exact frontend approach.
- Exact database choice between MySQL and MariaDB.
- Exact Redis timing.
- Exact first reporting dashboard scope.
- Exact first notification channels.
- Exact Hesabfa sync strategy.
- Exact advanced search timing.
- Exact mobile strategy.
- Exact AI tooling strategy.
- Exact criteria for moving from one phase to the next.

Open decisions must be documented before they become implementation commitments.

## 16. Changelog

- 2026-05-30: Initial roadmap document created.
