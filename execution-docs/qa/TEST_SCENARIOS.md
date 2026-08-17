# Test Scenarios

Document ID: QA-TEST-SCENARIOS
Status: Phase 1 Baseline Verified
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems, project-wiki/core/BUSINESS_RULES.md
Dependencies: ../systems, ACCEPTANCE_CRITERIA.md
Next Documents: ../execution/TASK_BREAKDOWN.md

Purpose: collect scenario-level tests for business behavior.

Phase 1 scenario groups:

| Scenario Group | Systems | Status |
|---|---|---|
| Guest/customer/inactive staff denied admin access | Auth, Admin Panel | Automated: pass |
| Staff roles reach protected dashboard | Auth, Admin Panel | Automated: pass |
| Invalid login and five-attempt throttle | Auth, Session | Automated: pass |
| Password change and secure logout | Auth, Session | Automated: pass |
| Owner/operator navigation permissions | Auth, Admin Panel | Automated: pass |
| Shared component render/state contracts | UI Components | Automated: pass |
| Dashboard preview honesty and regions | Admin Dashboard | Automated + browser: pass |
| Homepage RTL, SEO, structure and honesty | Storefront | Automated + browser: pass |
| Desktop/mobile navigation and overflow | Admin, Storefront | Browser: pass |

Deferred scenarios: checkout, live product/order/inventory workflows and payments begin only after their backend phases exist.

Rule: scenarios must reference acceptance criteria and traceability rows before development tasks are closed.
