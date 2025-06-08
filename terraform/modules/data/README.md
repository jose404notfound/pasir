# Data Module

This module is designed to manage auxiliary data resources required in the AKS infrastructure.

## Purpose

- Create user-assigned managed identities.
- Provide resources that complement security and integration, such as identities for Key Vault, policies, etc.
- Serve as a base for addon configurations that require separate identities.

## What it could contain

- `azurerm_user_assigned_identity` resources to create assigned identities.
- Variables for names, locations, and resource groups.
- Outputs with IDs and details of the created identities.

---

Currently not in use to keep infrastructure simple but can be enabled for advanced security and addon configurations.
