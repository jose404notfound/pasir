variable "cluster_name" {
  type = string
}

variable "location" {
  type = string
}

variable "resource_group_name" {
  type = string
}

variable "dns_prefix" {
  type = string
}

variable "kubernetes_version" {
  type = string
}

variable "default_node_pool_name" {
  type = string
}

variable "node_count" {
  type = number
}

variable "vm_size" {
  type = string
}

variable "os_disk_size_gb" {
  type = number
}

variable "max_pods" {
  type = number
}

variable "network_plugin" {
  type = string
}

variable "load_balancer_sku" {
  type = string
}

variable "outbound_type" {
  type = string
}

variable "service_cidr" {
  type = string
}

variable "dns_service_ip" {
  type = string
}

variable "identity_type" {
  type = string
}

variable "tags" {
  type = map(string)
}
