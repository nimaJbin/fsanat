# Document Graph

Document ID: EXEC-GRAPH
Status: Draft
Version: 0.1
Source of Truth: execution-docs
Related Wiki Sources: project-wiki/README.md
Dependencies: README.md
Next Documents: TRACEABILITY_MATRIX.md, core/PROJECT_VISION.md

Read order for every AI agent:

1. README.md
2. DOCUMENT_RULES.md
3. DOCUMENT_GRAPH.md
4. core/PROJECT_VISION.md
5. core/PRODUCT_SCOPE.md
6. core/BUSINESS_RULES.md
7. architecture/SYSTEM_ARCHITECTURE.md
8. architecture/MODULE_MAP.md
9. business/BUSINESS_PROCESS_MAP.md
10. domain/ENTITY_CATALOG.md
11. systems/[target system].md
12. ui/[target catalog].md
13. development/[target catalog].md
14. qa/ACCEPTANCE_CRITERIA.md
15. execution/TASK_BREAKDOWN.md

Navigation rule: read only the minimum path needed for the task, then follow the target document's Dependencies and Next Documents. If a required detail is missing, record the gap in the target execution document and link the relevant project-wiki source instead of copying long wiki text.

System work starts from architecture/MODULE_MAP.md, then the specific system document, then domain and API/UI/QA documents connected by TRACEABILITY_MATRIX.md.
