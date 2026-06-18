# Ticketing System

## 1. Purpose

This document defines the Ticketing System for "فروشگاه صنعت جوان".

The Ticketing System describes customer support, ticketing workflow, communication structure, operational support philosophy, and future automation direction for the platform.

This is a workflow behavior and operational architecture document. It is not implementation code, a migration plan, a live chat specification, or an enterprise CRM replacement.

The system is intended to support:

- Customer support.
- Operational communication.
- Order-related issues.
- Wallet and payment support.
- Future subscription support.
- Future AI-assisted support workflows.

## 2. Ticketing Philosophy

The Ticketing System must behave as a structured operational support workflow, not only as a simple chat box.

The system must remain:

- Operationally simple.
- Traceable.
- Scalable for future support needs.
- Compatible with future automation.
- Clear for customers and admins.
- Useful for historical communication review.

Phase 1 should focus on reliable manual support workflows. Realtime messaging, complex CRM behavior, and advanced automation are not required in phase 1.

Support history should help the business understand customer issues, order problems, payment problems, wallet concerns, shipping questions, account issues, and future subscription or digital access problems.

## 3. Core Ticket Concepts

The ticketing domain should use consistent terminology.

**Ticket** is a structured support request created by a customer or, where allowed, by an admin on behalf of a customer.

**Ticket Message** is a reply or communication entry inside a ticket. Messages may be written by customers, support operators, admins, or future automation.

**Ticket Status** describes the current workflow state of a ticket, such as open, pending, resolved, or closed.

**Ticket Category** describes the business area of the support request, such as order support, payment support, wallet support, shipping issues, technical support, account issues, or future subscription support.

**Priority** describes the operational urgency of the ticket. Priority should help admins focus work without overcomplicating phase 1.

**Assignment** means a ticket is assigned to an admin, support operator, or future department-specific role.

**Attachment** is a customer or admin-provided file related to the support request. Attachments are future-capable and should be permission-aware.

**Support Operator** is an admin-side role or permission group responsible for responding to customer support requests.

**Customer Visibility** defines which ticket content and status information the customer can see in the User Panel.

## 4. Ticket Categories

Ticket categories should help route, filter, and report support work.

Expected category concepts include:

- order support
- payment support
- wallet support
- shipping issues
- technical support
- account issues
- future subscription support

Category rules:

- Categories should remain understandable for customers and admins.
- Categories should support admin filtering and reporting.
- Categories should not introduce marketplace, vendor, multi-language, or public API assumptions.
- Future categories may be added when new systems such as digital products, subscriptions, or membership access become active.

Exact phase-1 category list is an open decision.

## 5. Ticket Statuses

Ticket statuses should make support workflow clear.

Expected status concepts include:

- open
- pending
- waiting_for_customer
- waiting_for_admin
- resolved
- closed
- archived

Status meanings:

- open: The ticket is active and needs review or response.
- pending: The ticket is active but waiting on an operational step, review, or related workflow.
- waiting_for_customer: The support team needs more information or action from the customer.
- waiting_for_admin: The customer has replied or the ticket requires admin/operator review.
- resolved: The issue has been answered or handled, but the ticket may still be reviewable.
- closed: The ticket is finished and no longer active.
- archived: The ticket is preserved for history but removed from normal active queues.

Exact status transitions, reopening rules, and auto-close behavior are open decisions.

## 6. Ticket Workflow

The ticket workflow should be clear, traceable, and practical.

Expected workflow:

1. Customer creates a ticket from the User Panel.
2. Customer selects or is assigned a ticket category.
3. Customer enters the issue description and optional related order or context.
4. The ticket appears in the Admin Panel ticket queue.
5. An authorized support operator or admin reviews the ticket.
6. The ticket may be assigned to a responsible operator or department.
7. Customer and admin replies are added as ticket messages.
8. The ticket status changes as the workflow progresses.
9. The issue is resolved when the support team has handled the request.
10. The ticket is closed or archived according to documented rules.

The system should support reopening when a customer replies after resolution or when an admin determines that the issue is not fully closed.

Important ticket actions should be logged so support history remains understandable.

## 7. Customer Panel Relation

Customers should be able to manage support requests from the User Panel.

Customer panel ticket features should include:

- Create tickets.
- View ticket history.
- View ticket status.
- Reply to tickets.
- See admin responses.
- Link a ticket to an order where supported.
- Upload attachments in the future.
- View future subscription or digital access support tickets where applicable.

Customer-visible content should be clear and Persian-only in the actual interface. Internal admin notes, operational-only audit data, financial internals, and sensitive business details must not be exposed to customers.

Customers should be able to use ticketing for order, payment, wallet, shipping, technical, account, and future subscription support.

## 8. Admin Panel Relation

The Admin Panel should provide practical support operations.

Admin ticket features should include:

- Ticket queue visibility.
- Ticket filtering.
- Ticket search where needed.
- Assignment.
- Status management.
- Response history.
- Customer context.
- Related order visibility.
- Related wallet or payment context where permissions allow.
- Internal notes as a future possibility.
- Audit visibility.

Admins and support operators should be able to understand who requested support, what the issue is, what has already been answered, what related order or wallet context exists, and what action is needed next.

Admin ticket views should remain permission-aware. Sensitive financial, wallet, or account details should only be visible to roles with the proper permissions.

## 9. Permission Relation

The Ticketing System must support role-based and permission-based access.

Expected support-related roles or permission groups may include:

- support operator
- admin
- accountant
- warehouse operator
- super admin

Permission direction:

- Support operators may handle normal customer tickets.
- Admins may review broader ticket activity and operational context.
- Accountants may need limited access to payment, refund, wallet, or financial support tickets.
- Warehouse operators may need access to shipping, inventory, or fulfillment-related tickets.
- Super admins may have full access where appropriate.

Some tickets may become department-specific in future phases. Ticket permissions should protect sensitive support areas without hardcoding business behavior to a single role name.

Exact support role and permission rules are open decisions.

## 10. Order Workflow Relation

Tickets may be related to the Order Workflow.

Order-related ticket contexts may include:

- Specific orders.
- Checkout problems.
- Payment issues.
- Shipping issues.
- Refund requests.
- Cancellation questions.
- Expired or rejected orders.
- Operational approval issues.
- Product availability questions.

Order relation rules:

- Tickets should be able to reference an order when the issue is order-related.
- Support operators should see enough order context to respond correctly when permissions allow.
- Customer support must not bypass order approval, payment, inventory, refund, or Dynamic Freeze rules.
- Ticket messages should not silently change order state without a documented admin action.
- Order-related ticket activity should remain useful for reporting and audit review.

The exact relationship between ticket actions and order state changes is an open decision.

## 11. Wallet Relation

Tickets may be related to wallet and payment support.

Wallet-related ticket contexts may include:

- Refund questions.
- Wallet adjustments.
- Failed wallet payments.
- Mixed payment issues.
- Transaction disputes.
- Customer credit questions.
- Future subscription payment support.

Wallet relation rules:

- Ticketing must not directly mutate wallet balance without a documented wallet operation.
- Wallet changes must remain ledger-based and traceable in the Wallet System.
- Support operators may request or escalate wallet actions, but sensitive wallet changes require proper permissions.
- Ticket history should help explain customer communication around refunds, credits, or disputes.
- Wallet-related ticket reporting should remain compatible with financial auditability.

Exact wallet escalation and adjustment workflows are open decisions.

## 12. Notification Relation

The Ticketing System should remain compatible with future notification workflows.

Future notification channels may include:

- Email.
- SMS.
- Telegram.
- Internal notifications.
- Admin alerts.

Possible notification events include:

- Ticket created.
- Customer replied.
- Admin replied.
- Ticket assigned.
- Ticket status changed.
- Ticket waiting for customer.
- Ticket resolved.
- Ticket closed.
- High-priority ticket created.

Notification workflows are future expansion unless a specific phase-1 requirement makes them necessary. Notifications must not replace ticket history, audit logs, or permission checks.

Customer-facing notifications should not expose sensitive internal notes or financial details.

## 13. Operational Logging

The Ticketing System should log important support actions.

Operational logs should include:

- Ticket creation.
- Customer replies.
- Admin replies.
- Status changes.
- Assignment changes.
- Priority changes.
- Category changes.
- Operator actions.
- Attachment actions where applicable.
- Timestamps.

Logs should help answer who performed an action, when it happened, what changed, and why the ticket moved through its workflow.

Ticket logs should remain compatible with future audit logs, reporting, and AI-assisted support analysis.

## 14. Auditability

Support conversations and actions should remain historically traceable.

Auditability should support:

- Conversation history.
- Ticket status history.
- Assignment history.
- Operator/admin actions.
- Customer actions.
- Related order references.
- Related wallet or payment references where applicable.
- Attachment history where applicable.
- Internal notes history if implemented later.

Ticket records should not be destructively edited in a way that removes important support history. Corrections or admin edits should be traceable when they affect meaningful support context.

Auditability is especially important for tickets related to refunds, wallet transactions, payment disputes, order approval issues, shipping problems, or account access.

## 15. Future Automation

The ticketing architecture should remain compatible with future automation.

Future automation may include:

- AI-assisted replies.
- Suggested responses.
- Automatic categorization.
- Ticket prioritization.
- Spam detection.
- Workflow automation.
- Support workload summaries.
- Escalation suggestions.
- Similar-ticket discovery.

AI-assisted support must remain reviewable. AI must not automatically issue refunds, change wallet balances, approve orders, cancel orders, change inventory, or expose sensitive data without documented approval rules.

Automation should improve support efficiency without replacing source-of-truth business rules or auditability.

## 16. Future Subscription Relation

The Ticketing System should support future subscription and digital product support flows.

Future support areas may include:

- Premium memberships.
- Subscription issues.
- Digital access problems.
- Restricted content access.
- Renewal questions.
- Expiration questions.
- Download or content visibility problems.

Subscription and digital access support must remain compatible with the Auth And Permission System, Order Workflow, Wallet System, and future Digital Access rules.

These workflows are future-phase behavior and should not overcomplicate phase 1 support.

## 17. Performance Philosophy

The Ticketing System should prioritize clarity, operational simplicity, and historical traceability over unnecessary realtime complexity.

Performance direction:

- Phase 1 does not require live chat or realtime messaging.
- Normal request/response workflows are acceptable.
- Ticket lists should remain filterable and practical for admins.
- Attachments and notification processing may use queues later if needed.
- Support history should remain reliable even if future caching or search features are added.

The system should scale through clear statuses, categories, permissions, and reporting before introducing complex support infrastructure.

## 18. Out of Scope

The Ticketing System must not support:

- Marketplace vendor support.
- Live chat infrastructure as a phase-1 requirement.
- Voice or video support.
- Multi-language support.
- Public support APIs.
- Enterprise CRM replacement.
- Vendor dispute workflows.
- Physical store-only support as website support scope.
- Automatic AI-driven financial or order actions.

Future integrations are allowed only when they remain aligned with documented product scope, support workflows, permissions, and auditability.

## 19. Open Decisions

The following decisions are still open:

- Exact phase-1 ticket category list.
- Exact ticket status transition rules.
- Exact reopening rules.
- Exact auto-close or archive behavior.
- Exact attachment support timing and limits.
- Exact support role and permission model.
- Exact internal notes behavior.
- Exact relationship between ticket actions and order state changes.
- Exact wallet escalation workflow.
- Exact notification events for phase 1.
- Exact ticket priority levels.
- Exact ticket filtering and reporting formats.
- Exact AI-assisted support boundaries.
- Exact spam detection or abuse handling rules.

Open decisions must be documented before they become implementation commitments.

## 20. Changelog

- 2026-05-30: Initial ticketing system document created.
