# Acceptance Criteria

Document ID: QA-ACCEPTANCE-CRITERIA
Status: Phase 1 Baseline Verified
Version: 1.0
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/core/BUSINESS_RULES.md, project-wiki/systems
Dependencies: ../core/BUSINESS_RULES.md, TEST_SCENARIOS.md
Next Documents: ../execution/TASK_BREAKDOWN.md

Purpose: define the verified Phase 1 acceptance baseline.

| Feature | Given | When | Then | Source |
|---|---|---|---|---|
| Admin boundary | Guest/customer/inactive user | Admin URL or login is requested | Access is denied or redirected without an admin loop | Phase 1 P1.2 |
| Staff login | Active owner/admin/operator | Valid credentials are submitted | Session regenerates and dashboard opens | Phase 1 P1.2 |
| Abuse protection | Invalid login identity/IP | Sixth failed attempt occurs | Generic throttled response is returned | Phase 1 P1.2 |
| Admin shell | Authenticated staff | Dashboard is opened | RTL navigation, account controls and page regions render responsively | Phase 1 P1.3 |
| Components | Supported props/states | Blade components render | Valid labelled/semantic output is produced | Phase 1 P1.4 |
| Dashboard | Staff opens overview | Preview mode is active | Metrics and states render with explicit non-production wording | Phase 1 P1.5 |
| Homepage | Visitor opens `/` | Desktop or mobile viewport is used | Semantic RTL homepage renders with honest preview content and metadata | Phase 1 P1.6 |
| Quality gate | Phase 1 change set | Verification suite runs | Tests, formatting, syntax, build, audit and visual checks pass | Phase 1 P1.7 |

Rules:

- Every future implementation task needs at least one acceptance row.
- Business rules must be testable.
- Permission-sensitive work must include allowed and denied cases.
- Edge cases from system docs must be represented before release.
