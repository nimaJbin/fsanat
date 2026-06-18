# Permission Matrix

Document ID: BUS-PERMISSION-MATRIX
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/systems/AUTH_AND_PERMISSION_SYSTEM.md
Dependencies: ROLE_MATRIX.md
Next Documents: ../systems/AUTH_SYSTEM.md, ../qa/ACCEPTANCE_CRITERIA.md

Purpose: map roles to permitted business actions.

Initial matrix:

| Action | Guest | Customer | Admin | Owner |
|---|---|---|---|---|
| Browse products | Yes | Yes | Yes | Yes |
| Place order | No | Yes | No | No |
| Manage products | No | No | To define | To define |
| Manage orders | No | No | To define | To define |

Rule: permission gaps must be resolved before implementation of protected routes, screens or APIs.
