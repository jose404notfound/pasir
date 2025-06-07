# Staging Environment (staging)

This folder contains the Terraform configuration for the staging (pre-production) environment.

## Purpose

- Simulate the production environment as closely as possible for pre-deployment validations.
- Configure AKS clusters with characteristics similar to production but possibly with smaller scale or temporary resources.
- Allow integration and acceptance testing with controlled data and configurations.

## Contents and Purpose of Each File

- **main.tf**  
  Calls the reusable modules (`network`, `compute`, and `data`) passing staging-specific variables to create the AKS cluster and its node pools.
  - **`network`** module: Configures the AKS cluster network, load balancers, and related networking settings.
  - **`compute`** module: Manages the node pools within the AKS cluster (additional pools can be created if needed).
  - **`data`** module: Handles creation of user-assigned identities and other auxiliary resources needed for specific addons or services like Key Vault.

- **variables.tf**  
  Declares all variables used by this environment with their types and default staging-specific values (e.g., smaller VM sizes, fewer nodes, cost optimization).

- **terraform.tfvars**  
  Provides concrete values for the variables declared in `variables.tf`. This file is used to customize the deployment for the staging environment.

- **provider.tf**  
  Configures the Terraform AzureRM provider with the required version and features, including authentication and subscription settings for staging.

- **outputs.tf**  
  Defines the outputs exported after deployment, such as the AKS cluster ID and fully qualified domain name (FQDN), useful for integration with other systems or manual access.

---

## Notes

- This setup uses a simplified approach with the cluster and node pool managed primarily via the `network` and `compute` modules to avoid conflicts and complexity.
- Staging variables are configured to replicate production with adjustments for scaling down or using temporary resources.
- Includes configurations that exist in both staging and production environments but not in development, such as resource scaling and network settings.

---

Currently not enabled to simplify deployment, but can be activated for more controlled deployment flows.
