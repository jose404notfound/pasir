# Development Environment (dev)

This folder contains the Terraform configuration for the development environment.

## Purpose

- Define the infrastructure and configuration specific to the development AKS deployment.
- Use environment-specific variables and settings to control resource sizing, network, and security for testing and validation purposes.
- Serve as the main deployment point for a Kubernetes cluster in the development environment, designed for lightweight, low-cost, and rapid iteration.

## Contents and Purpose of Each File

- **main.tf**  
  Calls the reusable `network` module passing development-specific variables to create the AKS cluster and its node pools.
  - **`network`** module: Configures the AKS cluster network, load balancers, and related networking settings.

- **variables.tf**  
  Declares all variables used by this environment with their types and default development-specific values (e.g., smaller VM sizes, fewer nodes, cost optimization for development).

- **terraform.tfvars**  
  Provides concrete values for the variables declared in `variables.tf`. This file is used to customize the deployment for the development environment.

- **provider.tf**  
  Configures the Terraform AzureRM provider with the required version and features, including authentication and subscription settings.

- **outputs.tf**  
  Defines the outputs exported after deployment, such as the AKS cluster ID and fully qualified domain name (FQDN), useful for integration with other systems or manual access.

---

## Notes

- This setup uses a simple approach with the AKS cluster and node pool managed solely via the `network` module to avoid conflicts and complexity.
- Development variables are tuned for rapid iteration and testing, with an emphasis on reducing costs by using smaller VM sizes and fewer resources.
- No advanced addons or configurations are included by default to keep the setup clean, easy to maintain, and suitable for quick experimentation.
- Suitable for environments that require minimal resources for testing purposes, allowing fast feedback loops for development.

---
