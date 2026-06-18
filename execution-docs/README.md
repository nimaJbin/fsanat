# Execution Docs

Document ID: EXEC-INDEX
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/README.md
Dependencies: project-wiki
Next Documents: DOCUMENT_GRAPH.md, DOCUMENT_RULES.md, MIGRATION_PLAN.md

This folder is the current implementation truth for AI-driven development of فروشگاه صنعت جوان. It is intentionally short, structured, and traceable. Long discussions, historic context, exploratory notes, and incomplete ideas stay in project-wiki.

AI agents must start here, then read DOCUMENT_GRAPH.md to choose the next required documents. Do not infer implementation from project-wiki alone. Use project-wiki only as source material when an execution document links to it or when manual migration work is assigned.

Primary groups:

- core: project purpose, scope, rules, glossary, decisions.
- architecture: system structure, module map, stack and database direction.
- business: processes, journeys, roles, permissions.
- domain: entities, fields, enums, states and relationships.
- systems: implementation-focused module briefs.
- ui: pages, forms and dashboards.
- development: APIs, events, queues, automations, integrations.
- qa: acceptance and scenario guidance.
- execution: roadmap, milestones, backlog and task breakdown.
- adr: architecture decision records.

All documents must keep metadata current and include Dependencies and Next Documents.
