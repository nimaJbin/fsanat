# Order Workflow

## 1. Purpose

This document defines the Order Workflow for "فروشگاه صنعت جوان".

The Order Workflow describes the order lifecycle, order states, checkout behavior, approval workflows, payment relation, cancellation behavior, expiration logic, inventory interaction, and operational order processing philosophy.

This is a core business system document. It focuses on business workflows and operational behavior, not implementation code, migrations, or database schema.

## 2. Order Philosophy

Orders must behave as operational workflows, not only payment records.

The platform must support physical product sales in phase 1 while remaining compatible with future digital products, subscription products, wallet behavior, notification workflows, and reporting.

The order system must support:

- Human approval.
- Operational review.
- Inventory uncertainty.
- Stock reservation or release behavior.
- Payment success and failure handling.
- Future notification workflows.
- Financial tracking.
- Auditability.
- Market volatility controls.

Not every order must pass through every possible state. The workflow should remain flexible enough to support simple orders, approval-required orders, failed payments, canceled orders, expired orders, future wallet payments, and future digital access purchases.

## 3. Checkout Rules

Customers may browse products, add products to cart, and modify cart contents without registration.

Checkout must validate product availability, product status, Dynamic Freeze rules, inventory rules, pricing rules, and any approval requirements before final invoice creation.

Cart actions should not necessarily permanently reduce stock. Inventory reservation and stock reduction timing must remain configurable and documented before implementation.

Checkout should be simple for phase 1 but must not ignore operational safeguards such as inventory uncertainty, price volatility, approval requirements, frozen products, or incomplete customer profile data.

## 4. Registration Requirements

Registration and profile completion are mandatory before final invoice creation.

Required customer data:

- Phone number.
- Full name.
- Postal address.
- Postal code.
- Email.

The customer-facing experience must remain Persian-only. Customer identity should align with the Auth And Permission System, where phone number is expected to become the default identity field.

Orders must not become finalized invoices until required customer data is complete and validated.

## 5. Order Lifecycle

The order lifecycle begins when a customer moves from cart toward checkout and continues until the order is paid, completed, canceled, expired, refunded, rejected, or otherwise closed by a documented workflow.

A typical phase-1 physical product flow may include:

- Customer adds products to cart.
- Customer starts checkout.
- Customer registers or logs in if required.
- Customer completes required profile information.
- System checks product, inventory, freeze, and approval rules.
- Order either proceeds toward payment or waits for approval.
- Payment succeeds, fails, or is retried.
- Admin processes approved and paid orders.
- Order is shipped or completed.
- Order remains visible for customer support, reporting, and financial traceability.

Approval-required, frozen, failed payment, canceled, expired, and future wallet or digital product flows may follow different paths.

## 6. Order States

Order states should make business progress clear to admins, customers, payment workflows, inventory workflows, and reports.

Expected order state concepts include:

- cart
- pending_checkout
- pending_payment
- paid
- pending_approval
- approved
- rejected
- processing
- shipped
- completed
- canceled
- expired
- payment_failed
- refunded
- frozen

State meanings:

- cart: Products are selected before final checkout or invoice creation.
- pending_checkout: Checkout has started, but required validation, profile completion, or confirmation is not complete.
- pending_payment: The order is ready for payment or waiting for payment gateway response.
- paid: Payment has succeeded and the order is recognized as a Website Sale when other required rules are satisfied.
- pending_approval: The order requires admin review before invoice confirmation, payment continuation, or operational processing.
- approved: Required approval has been granted and the order may continue.
- rejected: Approval or operational review failed and the order must not continue to final payment or fulfillment.
- processing: The order is being prepared operationally after payment or approval.
- shipped: Physical product shipment has started or been handed to delivery workflow.
- completed: The order is fully completed from the website business perspective.
- canceled: The order was intentionally canceled by customer, admin, or system rule.
- expired: The order is no longer valid because a payment, approval, price, stock, or reservation window expired.
- payment_failed: Payment failed or was not confirmed by the payment gateway.
- refunded: Payment was reversed fully or partially according to future documented refund rules.
- frozen: Checkout, payment, or confirmation is blocked by Dynamic Freeze.

Exact state transitions are open decisions and must be documented before implementation.

## 7. Approval Workflow

Some products, categories, subcategories, orders, or broader scopes may require manual admin approval before invoice finalization or payment continuation.

Approval may be required because of:

- Stock uncertainty.
- Market volatility.
- Sync delay.
- Operational review.
- Price uncertainty.
- Category or product-specific business rules.

Phase 1 approval should happen through the Admin Panel.

Future approval channels may include:

- Telegram.
- Email.
- Other messaging systems.

Approval rules:

- Approval requirement should be explainable to admins.
- Approval actions must be logged.
- Approved orders may continue according to payment and inventory rules.
- Rejected orders must not continue to final payment or fulfillment.
- Approval should remain compatible with Dynamic Freeze and the Universal Targeting Engine.
- Approval workflows must not bypass inventory, pricing, customer, payment, or financial rules.

## 8. Payment Workflow

Payment must be connected to the website order flow and payment gateway.

The order system must support:

- payment pending
- payment success
- payment failure
- payment retry
- future refund workflows

Payment rules:

- Only completed payment gateway sales count as Website Sales.
- Payment success should be recorded clearly and auditable.
- Payment failure should move the order to `payment_failed` or another documented state.
- Payment retry should be possible when business rules allow it.
- Failed or abandoned payment flows may expire.
- Future refund workflows must be documented before implementation.
- Payment must respect Dynamic Freeze rules.

Payment success should not corrupt historical product price, Base Cost, inventory, customer, or order details.

## 9. Inventory Relation

The Order Workflow must integrate with the Inventory System.

Inventory behavior should support:

- Cart behavior.
- Checkout validation.
- Inventory reservation.
- Approval behavior.
- Stock reduction.
- Stock restoration.
- Cancellation handling.
- Payment failure handling.
- Order expiration handling.

Cart actions should not necessarily permanently reduce stock.

The exact reservation timing should remain configurable and flexible. Possible future models may reserve stock during checkout, after approval, after payment initiation, or after payment success, depending on documented business rules.

Inventory actions caused by orders must be logged. Order workflow must not treat physical store sales as website sales or website profit.

## 10. Expiration & Cancellation Rules

The system must support expiration logic for unpaid orders, abandoned payment flows, approval windows, and reserved stock release.

Expiration may apply to:

- Pending checkout.
- Pending payment.
- Pending approval.
- Abandoned payment gateway flows.
- Reserved stock.
- Frozen or price-sensitive order flows.

Cancellation may be triggered by:

- Customer action where allowed.
- Admin action.
- Rejection during approval.
- Payment failure rules.
- Expiration.
- Operational decision.

Expiration and cancellation rules must define whether inventory is released, payment retry remains possible, customer visibility changes, and reporting status changes.

Exact expiration duration, cancellation permissions, and stock restoration rules are open decisions.

## 11. Dynamic Freeze Relation

Orders must respect the Dynamic Freeze system.

Admins may temporarily disable checkout, payment, or order confirmation for:

- Whole platform.
- Store section.
- Category.
- Subcategory.
- Specific product.

Dynamic Freeze may be used because of inventory uncertainty, sync failure, price volatility, operational risk, or review needs.

Freeze rules:

- Frozen products or scopes should not continue through normal checkout or payment flow.
- Freeze must be auditable and reversible.
- Freeze should not delete cart data, product data, or order history.
- Freeze should clearly block only the affected operation or scope.
- Existing orders affected by a new freeze require documented handling before implementation.

Exact behavior for already-created orders when a freeze is applied is an open decision.

## 12. Operational Logging

Every important order action should be loggable.

Operational logs should include:

- Status changes.
- Approval actions.
- Rejections.
- Cancellations.
- Expiration actions.
- Inventory reservations.
- Inventory releases.
- Stock reductions.
- Payment actions.
- Payment failures.
- Refund actions, future.
- Manual admin operations.
- Dynamic Freeze effects.
- Customer-visible changes where relevant.

Logs should help answer who did what, when it happened, what changed, why it changed, and which business rule or workflow caused it.

Order logs should remain compatible with future audit logs and reporting.

## 13. Customer Visibility

Customers should be able to see their orders in the User Panel.

Customer-visible order information should include:

- Order summary.
- Order status.
- Payment status where appropriate.
- Approval or waiting status where appropriate.
- Shipping or processing status.
- Cancellation or expiration status.
- Related ticket/support access where useful.
- Future wallet or refund visibility.
- Future digital access visibility.

Customer-facing status names should be Persian in the actual interface, but documentation may use English domain terms.

Customer visibility should be clear and practical without exposing internal-only operational notes, financial internals, admin-only logs, or sensitive approval details.

## 14. Admin Operational Flow

Admins must be able to manage orders from the Admin Panel.

Admin order workflows should support:

- Order list.
- Order details.
- Operational filtering.
- Status review.
- Payment review.
- Customer information review.
- Product and inventory review.
- Approval or rejection.
- Cancellation.
- Processing and shipping updates.
- Expiration review.
- Freeze impact review.
- Support/ticket context.
- Reporting context.

Operational filters may include state, payment status, approval status, customer, product, category, inventory risk, freeze status, date range, and future reporting dimensions.

Admin actions must be permission-aware and auditable.

## 15. Future Wallet Relation

The Order Workflow should remain compatible with future wallet behavior.

Future wallet relation may include:

- Wallet payments.
- Mixed wallet and gateway payments.
- Wallet refunds.
- Credit adjustments.
- Manual wallet corrections.
- Wallet transaction reporting.

Wallet actions must be traceable and compatible with financial reporting. Wallet behavior must be documented in detail before implementation.

Phase 1 should keep wallet integration foundational and avoid advanced wallet complexity unless explicitly required.

## 16. Future Digital Product Relation

The Order Workflow should remain compatible with future digital products and subscription products.

Future digital relation may include:

- Subscription purchases.
- Digital access products.
- Membership activation.
- Premium content visibility.
- Automatic access granting after successful payment.
- Access expiration or renewal.
- Download or content access rules.

Digital and subscription product access must be documented before implementation. Future access should not bypass payment, customer, authorization, refund, or support rules.

Physical product shipping states may not apply to future digital products, so order workflow must remain product-type aware.

## 17. Notification Relation

The architecture should support future notifications related to order workflow.

Future notification channels may include:

- SMS.
- Email.
- Telegram.
- Internal notifications.
- Approval requests.

Possible notification events include:

- Order created.
- Checkout started.
- Payment pending.
- Payment succeeded.
- Payment failed.
- Approval requested.
- Order approved.
- Order rejected.
- Order canceled.
- Order expired.
- Order shipped.
- Order completed.
- Refund processed, future.

Notification workflows are future expansion unless required for phase 1. Notification content and delivery rules must be documented before implementation.

## 18. Reporting Relation

The Order Workflow must support reporting.

Order reports may include:

- Sales reporting.
- Operational reporting.
- Approval reporting.
- Cancellation reporting.
- Expiration reporting.
- Payment failure reporting.
- Inventory reporting.
- Financial reporting.
- Customer support reporting.
- Future wallet reporting.
- Future digital access reporting.

Reports must preserve the distinction between Website Sales and physical store operations.

Financial reports must use completed Website Sales, preserved Base Cost snapshots, valid operational costs, and documented payment records. Orders must preserve enough history to support auditability and future profit calculation.

## 19. Out of Scope

The Order Workflow must not support:

- Marketplace or vendor order workflows.
- Real-time operational systems as a phase-1 requirement.
- Multi-currency orders.
- Public order APIs in phase 1.
- Physical store POS workflows.
- Physical store sales as Website Sales.
- Multi-language order flows.
- Vendor payouts or vendor fulfillment logic.
- Treating inventory appreciation as order profit.

Future mobile app order visibility is allowed, but mobile app implementation is outside this document.

## 20. Open Decisions

The following decisions are still open:

- Exact order state transition map.
- Exact distinction between order state, payment state, approval state, and fulfillment state.
- Exact point when an order record is created from cart.
- Exact invoice creation timing.
- Exact inventory reservation timing.
- Exact stock reduction timing.
- Exact stock restoration rules.
- Exact abandoned checkout expiration duration.
- Exact unpaid order expiration duration.
- Exact payment retry rules.
- Exact refund workflow.
- Exact cancellation permissions for customer and admin.
- Exact handling for already-created orders when Dynamic Freeze is applied.
- Exact approval rules for products, categories, subcategories, and scopes.
- Exact customer-visible status labels.
- Exact admin filtering requirements.
- Exact notification events required in phase 1.
- Exact wallet payment behavior.
- Exact future digital access activation rules.

Open decisions must be documented before they become implementation commitments.

## 21. Changelog

- 2026-05-30: Initial order workflow document created.
