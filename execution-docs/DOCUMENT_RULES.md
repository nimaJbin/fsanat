# Document Rules

Document ID: EXEC-RULES
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/README.md
Dependencies: README.md
Next Documents: DOCUMENT_GRAPH.md, DOCUMENT_TEMPLATE.md, SYSTEM_DOCUMENT_TEMPLATE.md

project-wiki is the raw knowledge base. It preserves old and current documentation, discussions, decisions, ideas, business notes and historical context.

execution-docs is the current implementation truth. It must be concise, structured, traceable and useful for AI-driven development. It must not duplicate long wiki content. When deeper context is needed, reference project-wiki files through Related Wiki Sources.

Each execution document must include the standard metadata header: Document ID, Status, Version, Source of Truth, Related Wiki Sources, Dependencies and Next Documents.

Target document length is 1000-1500 characters. Maximum allowed without warning is 2500 characters. If more space is needed, stop and add a note explaining why approval is required before expansion.

Every future AI agent must start from execution-docs/README.md and DOCUMENT_GRAPH.md. Agents must not modify application code while performing documentation migration tasks.

Phase planning and live implementation tracking documents are explicitly exempt
from the 2500-character limit when the user has requested complete, durable
tracking. This exemption currently applies to
`execution/PHASE_1_PLAN.md` and `execution/PHASE_1_STATUS.md`. These documents
must remain cohesive single files: the plan records the complete approved scope,
while the status file records current position, completed objective IDs,
verification evidence, blockers and the next objective. Do not shorten, split or
archive their useful history merely to satisfy the normal execution-document
length target.
