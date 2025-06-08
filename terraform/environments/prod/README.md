# Production Environment (prod)

This folder contains the Terraform configuration for the production environment.

## Purpose

- Define the infrastructure and configuration specific to the production AKS deployment.
- Use environment-specific variables and settings to control resource sizing, network, and security.
- Serve as the main deployment point for the live Kubernetes cluster, with robust and scalable configurations suitable for production workloads.

## Contents and Purpose of Each File

- **main.tf**  
  Calls the reusable modules (`network`, `compute`, and `data`) passing production-specific variables to create the AKS cluster and its node pools.
  - **`network`** module: Configures the AKS cluster network, load balancers, and related networking settings with production-level security and redundancy.
  - **`compute`** module: Manages the node pools for the AKS cluster, including scaling options, resource allocation, and VM size selection.
  - **`data`** module: Handles the creation of user-assigned identities and other essential resources like Key Vault integration for managing secrets securely.

- **variables.tf**  
  Declares all variables used by this environment with their types and default production-appropriate values (e.g., location, VM size, node count).

- **terraform.tfvars**  
  Provides concrete values for the variables declared in `variables.tf`. This file is used to customize the deployment for the production environment.

- **provider.tf**  
  Configures the Terraform AzureRM provider with the required version and features, including authentication and subscription settings for production.

- **outputs.tf**  
  Defines the outputs exported after deployment, such as the AKS cluster ID and fully qualified domain name (FQDN), useful for integration with other systems or manual access.

---

## Notes

- This setup uses a more advanced approach with the cluster and node pool managed via the `network`, `compute`, and `data` modules to provide flexibility and scalability.
- Production variables are tuned for a balance between cost, performance, and security based on production requirements.
- Configurations in this environment ensure the AKS cluster is optimized for high availability, redundancy, and production workloads.
- Addons and advanced configurations (e.g., Azure Key Vault integration, Azure Policy) can be added as needed for specific production use cases.

---

Currently not enabled to simplify deployment, but can be activated for more controlled deployment flows.
