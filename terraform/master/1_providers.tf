provider "aws" {
  region  = var.aws_region
  profile = var.default_tags.owner
}
