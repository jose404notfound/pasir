# Compute Module

This module is intended to manage node pools of an AKS cluster in Azure.

## Purpose

- Define and manage additional node pools within an AKS cluster.
- Configure specific node features such as VM size, disk size, autoscaling, and upgrade policies.
- Enable scalability and workload segmentation using multiple node pools.

## What it could contain

- `azurerm_kubernetes_cluster_node_pool` resources to create node pools.
- Variables to configure VM size, node count, autoscaling, labels, modes, and upgrade policies.
- Outputs providing IDs and details of the created node pools.

---

Currently not in use to simplify cluster management but can be added to handle nodes with specific characteristics or dynamic scaling.
