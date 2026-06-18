# Migration Plan

Document ID: EXEC-MIGRATION-PLAN
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki
Dependencies: DOCUMENT_RULES.md
Next Documents: MIGRATION_REPORT.md, execution/BACKLOG.md

Goal: preserve the existing documentation as project-wiki and introduce execution-docs as a clean implementation layer.

Completed setup steps:

1. Inspect existing codex-doc tree.
2. Record the files moved into project-wiki.
3. Rename codex-doc to project-wiki.
4. Update internal references from codex-doc to project-wiki.
5. Create execution-docs folders and seed documents.

Next migration phases:

1. Review project-wiki/core and migrate stable facts into core documents.
2. Review project-wiki/systems and map each old system note to a new systems document.
3. Build entity, field, enum and state catalogs from confirmed implementation decisions.
4. Fill traceability rows before creating development tasks.
5. Create ADR files only when an actual architecture decision is approved.

Do not bulk-rewrite old documents. Migrate only confirmed, implementation-ready facts.
