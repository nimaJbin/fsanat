# Auth And Permission System

## 1. Purpose

This document defines the authentication, authorization, access control, permission philosophy, role structure, and security direction for "فروشگاه صنعت جوان".

This is a core system architecture document. It describes expected behavior and workflows, not implementation code.

The system must support the customer panel, admin panel, operational workflows, inventory management, order approvals, wallet system, ticketing, financial systems, reporting, future digital products, future subscriptions, and future AI-assisted workflows.

## 2. Authentication Philosophy

Authentication should be simple in phase 1 and extensible for future operational growth.

The platform must support:

- Login.
- Logout.
- Password reset.
- Session handling.
- Remember-me behavior.
- Secure credential handling.
- Account status management.
- Blocked or suspended users.
- Future 2FA possibility.
- Future login activity tracking.

Phone number should become the default identity field for customer authentication because the platform targets the Iranian market and customer checkout requires phone verification-friendly identity.

Authentication must keep customer access and admin access logically separated, even if they share the same underlying user foundation.

## 3. Authorization Philosophy

Authorization must be permission-aware and scalable.

The system should support role-based access control while avoiding hardcoded role logic. Roles should group permissions, but business behavior should check permissions or policies instead of relying on fixed role names.

Authorization should support:

- Role-based access control.
- Permission grouping.
- Granular permissions.
- Future module-level permissions.
- Future action-level permissions.
- Future workflow permissions.
- Auditability for sensitive access changes.

Permissions must not become tightly coupled to UI-only logic. The same permission philosophy should protect backend actions, admin panel visibility, operational workflows, and future API or mobile access if those become active.

## 4. Customer Authentication Rules

Customers may add products to the cart before registration.

Registration is mandatory before final invoice creation.

Before checkout completion, the customer must complete:

- Phone number.
- Full name.
- Address.
- Postal code.
- Email.

Customer authentication should support a practical Persian-only user experience. Account status should allow active, blocked, suspended, or future documented states.

Future customer login activity tracking may record successful logins, failed login attempts, session changes, and suspicious activity.

## 5. Admin Authentication Rules

Admin panel access must be logically and operationally separated from customer access.

Admin authentication should support:

- Secure login.
- Secure logout.
- Password reset.
- Session handling.
- Permission-aware access.
- Account status checks.
- Future 2FA.
- Future IP restriction.
- Future device and session management.
- Audit logging for sensitive activity.

Admin authentication should be stricter than customer authentication because admin users may access products, orders, approvals, financial records, wallet adjustments, reports, inventory corrections, settings, and audit logs.

## 6. User Roles

The role system should start simple but allow future expansion.

Initial expected roles:

- Super Admin.
- Admin.
- Support Operator.
- Warehouse Operator.
- Accountant.
- Content Manager.
- Customer/User.

Role meanings:

- Super Admin: Full system access and high-risk administrative permissions.
- Admin: Broad operational access, depending on assigned permissions.
- Support Operator: Ticketing, customer support, and limited customer/order visibility.
- Warehouse Operator: Inventory visibility, inventory actions, shipping-related workflows, and operational stock review.
- Accountant: Financial reports, costs, profit-related visibility, wallet review, and accounting-related workflows.
- Content Manager: Products, categories, media, SEO fields, and content-related workflows.
- Customer/User: Customer panel access, orders, wallet, tickets, addresses, and future digital access.

Future operational roles must remain possible without rewriting the permission system.

## 7. Permission System

The permission system must support scalable access control across current and future modules.

Permission groups may include:

- User management.
- Product management.
- Category and taxonomy management.
- Inventory management.
- Order management.
- Approval workflows.
- Dynamic Freeze.
- Bulk operations.
- Import pipeline.
- Financial and profit system.
- Wallet operations.
- Ticketing.
- Reporting.
- Settings.
- Audit logs.
- Future digital/subscription access.
- Future AI-assisted workflows.

Permissions should support both visibility and actions. For example, a user may view financial reports but not edit manual costs, or view wallet balances but not apply manual wallet adjustments.

Sensitive actions should use explicit permissions and may require elevated access in the future.

## 8. Session & Security Rules

The system must follow secure authentication and session practices.

Security direction:

- Secure password storage.
- Rate limiting.
- Brute-force protection.
- CSRF protection.
- Session expiration.
- Secure remember-me behavior.
- Secure credential reset flow.
- Environment-based secrets handling.
- Future device management.
- Future session management.
- Future IP restriction for admin access.
- Future 2FA for sensitive roles.

Session behavior should balance usability and risk. Admin sessions should be treated as higher risk than customer sessions.

The platform has no public API in phase 1, but security decisions should not block future mobile app or API-ready architecture.

## 9. Wallet & Financial Access Rules

Financial operations require auditability.

Wallet operations must be traceable and permission-protected. Sensitive wallet actions may include:

- Manual wallet adjustment.
- Refund-related wallet changes.
- Viewing wallet transaction history.
- Reviewing customer balance.
- Future wallet credit or debit operations.

Financial permissions should protect:

- Profit reports.
- Base Cost visibility.
- Operational costs.
- Approved Costs.
- Manual cost registration.
- Wallet transactions.
- Future accounting integration.

Sensitive financial operations may require elevated permissions or future approval workflows.

## 10. Audit & Activity Logging

The system should support future audit logs for authentication, authorization, and sensitive operations.

Audit areas should include:

- Login activity.
- Failed login attempts.
- Permission changes.
- Role changes.
- Account status changes.
- Operational actions.
- Approval actions.
- Financial actions.
- Wallet actions.
- Inventory adjustments.
- Dynamic Freeze actions.
- Settings changes.

Audit logs should help answer who performed an action, when it happened, what changed, and why it matters.

Phase 1 can start with focused auditability for high-risk operations, then expand as the platform grows.

## 11. Future Subscription Access

The authentication and permission architecture should support future digital and subscription access.

Future access rules may include:

- Access-controlled content.
- Membership permissions.
- Digital subscription access.
- Premium user states.
- Expiration or renewal-based access.
- Download or content visibility rules.

Digital access must be documented in detail before implementation. It should not be mixed with marketplace or multi-vendor concepts.

## 12. Future Security Expansion

Future security expansion may include:

- 2FA for admins or sensitive roles.
- IP restriction for admin panel.
- Device/session management.
- Login activity dashboard.
- Suspicious activity alerts.
- More detailed audit trails.
- Approval requirements for high-risk permission changes.
- Mobile app authentication support.
- Token-based internal or mobile access if future APIs become active.

Security should grow with operational risk. Phase 1 should avoid unnecessary complexity but must not block future hardening.

## 13. Open Decisions

The following decisions are still open:

- Exact authentication method for customer phone-first login.
- Whether email login remains supported alongside phone number.
- Exact account status names and transitions.
- Exact role and permission model for phase 1.
- Whether to use a package or custom implementation for roles and permissions.
- Exact admin 2FA timing.
- Exact session expiration rules for customers and admins.
- Exact audit log implementation strategy.
- Exact future mobile authentication approach.
- Exact subscription and digital access permission model.

Open decisions must be documented before they become implementation commitments.

## 14. Changelog

- 2026-05-30: Initial authentication and permission system document created.
