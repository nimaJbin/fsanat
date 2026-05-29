# Tech Stack Decisions

## 1. Purpose

This document defines the initial technical stack decisions for "فروشگاه صنعت جوان".

It is intended to guide future Codex sessions, developers, and documentation updates when choosing technologies, avoiding premature complexity, and keeping phase 1 aligned with the project vision.

This is a decision record, not source code and not an installation guide.

## 2. Project Context

"فروشگاه صنعت جوان" is a custom Persian commerce platform for the Iranian market. It starts with physical product sales and must remain extensible for future digital products, subscription products, wallet, ticketing, reporting, AI-assisted tools, and mobile app support.

The platform is not a generic CMS, marketplace, or template-based store. It must support business-specific workflows such as website-only profit, Base Cost tracking, inventory sync, approval workflows, Dynamic Freeze, and scope-based operations.

The main developer context includes Laravel, PHP, Node.js, and Docker.

## 3. Stack Philosophy

The stack should be practical, familiar, and phase-1 friendly.

Core principles:

- Prefer Laravel-first implementation for the main business system.
- Keep phase 1 simple and avoid unnecessary service splitting.
- Use relational data modeling for financial, order, inventory, and reporting consistency.
- Plan queues and background jobs from the beginning.
- Keep the architecture API-ready for future frontend, mobile, and internal integrations.
- Do not introduce Node.js, realtime systems, advanced search, or external infrastructure before there is a clear business need.
- Keep all technical decisions aligned with documentation-first and domain-first design.

## 4. Backend Decision

Laravel/PHP is the preferred core backend and business system.

Laravel is suitable for the initial platform because it provides mature support for:

- Admin panel workflows.
- Authentication.
- Authorization.
- Orders.
- Products.
- Database models.
- Queues.
- Jobs.
- Notifications.
- Policies.
- Validation.
- APIs for future frontend or mobile usage.

Laravel should own the core business logic in phase 1, including commerce, checkout, orders, payment coordination, inventory workflows, profit foundations, approval workflows, ticketing, wallet foundation, and reporting foundation.

Node.js should not be forced into phase 1 unless there is a clear need.

## 5. Frontend Direction

The frontend decision is an open decision.

Possible frontend options:

- Laravel Blade for fastest MVP, admin-first development, and simple phase 1 delivery.
- Vue/Nuxt for a richer SPA or frontend experience.
- React/Next.js if future requirements clearly justify it.

Initial recommendation:

- Start simple.
- Prefer Laravel-first implementation for phase 1 unless a separate frontend is clearly needed.
- Keep the architecture API-ready so a future mobile app or modern frontend can be added later.

The phase 1 frontend should prioritize a reliable Persian user experience, checkout clarity, admin workflows, and maintainable development speed.

## 6. Database Decision

The main database must be relational.

Preferred options:

- MySQL.
- MariaDB.

The platform has financial, order, inventory, approval, customer, wallet, and reporting workflows. Relational consistency is important for traceability, reporting, and long-term maintainability.

PostgreSQL remains a possible future option if hosting, reporting, data integrity, or operational requirements later justify it, but the initial preferred direction is MySQL or MariaDB.

## 7. Cache & Queue Decision

Laravel queues should be planned from the beginning.

Queues should be used for:

- Product import.
- Image processing.
- Notifications.
- Accounting sync.
- Reports.
- Future AI jobs.

Redis is recommended later when needed for:

- Queues.
- Cache.
- Sessions.
- Rate limiting.
- Background jobs.

Phase 1 should not require Redis unless queue, cache, session, or operational needs make it useful.

## 8. Storage & Media Decision

The project should support local storage in development and scalable storage later.

The media system must support:

- Product images.
- Multiple images per product.
- Future digital files.
- Import ZIP files.
- Generated reports.

Storage design should avoid hard-coding local-only assumptions. Phase 1 can start with local filesystem storage, but the architecture should allow later migration to external object storage or server-managed media storage.

## 9. Search Decision

Phase 1 can use database search.

Database search is acceptable for the initial catalog and admin workflows as long as it remains understandable and maintainable.

Future search options:

- Meilisearch.
- Elasticsearch.
- OpenSearch.

Advanced search should be introduced only if product search, filtering, ranking, or performance requirements become too complex for database search.

## 10. Docker & Deployment Direction

The project must be Docker-first.

Docker should support:

- App container.
- Database.
- Queue worker.
- Scheduler.
- Optional Redis.
- Optional Node service later.

Docker should make local development, deployment, background workers, scheduled tasks, and future scaling predictable.

Phase 1 should keep Docker setup practical and avoid production-grade infrastructure complexity until deployment requirements are clearer.

## 11. Realtime Strategy

Realtime is not required in phase 1.

The platform should prefer:

- Normal HTTP requests.
- Scheduled sync.
- Queued jobs.
- Manual admin actions.
- Controlled approval workflows.

Realtime systems, websocket services, and live synchronization should be avoided unless a clear future feature requires them.

Node.js may be useful later for realtime features or websocket services, but this is not a phase 1 requirement.

## 12. External Integrations

The platform should plan for these integrations:

- Hesabfa or accounting sync.
- Payment gateway.
- SMS service.
- Email.
- Future Telegram or message-based approval notifications.
- Future AI services.

Integrations should be isolated behind maintainable service boundaries so business logic does not become tightly coupled to external providers.

Accounting sync should be controlled and not assumed to be real-time. Payment gateway integration must align with Website Sale and profit calculation rules.

## 13. Security & Operations

Security and operations must be planned from the beginning.

Required directions:

- Role-based access control.
- Permissions.
- Audit logs for important business and financial actions.
- Backup strategy.
- Secure handling of credentials.
- Environment variables for secrets and environment-specific settings.
- Clear separation between development, staging, and production settings when those environments exist.

Financial workflows, approval workflows, wallet behavior, inventory adjustments, payment actions, and admin operations should be traceable.

## 14. Future Technical Options

Future technical options may include:

- Node.js services for realtime features.
- Node.js or separate workers for special background processing.
- Automation services.
- Future AI-related processing services.
- Heavy import or image processing services if Laravel queues are not enough.
- Meilisearch, Elasticsearch, or OpenSearch for advanced product search.
- Separate frontend application if product experience requires it.
- Mobile app API support.

These options should be introduced only when the business need is clear and documented.

## 15. Decisions Not Final Yet

The following are open decisions:

- Final frontend approach: Laravel Blade, Vue/Nuxt, React/Next.js, or another documented option.
- Final database choice between MySQL and MariaDB.
- Whether Redis is needed immediately in phase 1 or added later.
- Final storage strategy for production media and future digital files.
- Final search engine if database search becomes insufficient.
- Final deployment topology for production.
- Exact Hesabfa integration behavior and sync frequency.
- Future AI service architecture.
- Future mobile app architecture and API boundaries.

Open decisions must be documented before implementation choices become permanent.

## 16. Changelog

- 2026-05-30: Initial tech stack decisions document created.
