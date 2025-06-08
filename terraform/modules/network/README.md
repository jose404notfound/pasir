# Network Module

This module is responsible for provisioning the core AKS cluster resource and its primary networking configuration.

## Purpose

- Create the main `azurerm_kubernetes_cluster` resource representing the AKS cluster.
- Configure the default node pool directly within the cluster resource to avoid pool duplication and conflicts.
- Set networking parameters such as network plugin, load balancer SKU, service CIDRs, and DNS service IP.
- Define the cluster identity configuration (e.g., system-assigned managed identity).
- Provide outputs with cluster ID and FQDN for consumption by other modules or environments.

## Contents and Functionality

- **main.tf**  
  Contains the resource definition for the AKS cluster, including the default node pool and network profile.

- **variables.tf**  
  Defines the variables needed for cluster creation like cluster name, location, resource group, node count, VM size, network settings, and identity type.

- **outputs.tf**  
  Exports important information such as the cluster resource ID and the cluster’s FQDN after creation.

---

## Notes

- This module focuses on simplicity and correctness by managing the cluster and its default node pool in one place.
- It avoids the complexity of managing additional node pools separately.
- It is designed to be reusable across different environments by parameterizing key values.

