variable "aws_region" {
  type        = string
  description = "region"
  default     = "us-west-2"
}

variable "default_tags" {
  type = map(string)
  description = "Default Tags"
  default = {
    managed     = "terraform"
    environment = "master"
    owner       = "cellide"
  }
}

variable "ID_CONTA_AWS" {
  type        = string
  description = "ID Conta Master Cellide"
  nullable    = false
  default     = "123115356005"
}
