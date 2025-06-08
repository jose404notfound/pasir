module "network" {
  source = "../../modules/network"

  cluster_name           = var.cluster_name
  location               = var.location
  resource_group_name    = var.resource_group_name
  dns_prefix             = var.dns_prefix
  kubernetes_version     = var.kubernetes_version
  default_node_pool_name = "agentpool"
  node_count             = var.node_count
  vm_size                = var.vm_size
  os_disk_size_gb        = var.os_disk_size_gb
  max_pods               = var.max_pods
  network_plugin         = var.network_plugin
  load_balancer_sku      = var.load_balancer_sku
  outbound_type          = var.outbound_type
  service_cidr           = var.service_cidr
  dns_service_ip         = var.dns_service_ip
  identity_type          = var.identity_type
  tags                   = var.tags
}
