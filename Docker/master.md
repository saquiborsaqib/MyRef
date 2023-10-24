 ### Containerization 
A way to package application with all the necessary dependencies and configuration.
Portable artifact, easily shared and moved around.
Makes Development and Deployment more effecient.

### Where do Containers lives?  *--------- in Container Repository.*:
  These Repositories can be Private or Public, like DockerHub.

### What is Container 
  - Layers of images 
  - Mostly Linux Base Image, because small size 
  - Application image on top

### Docker 
Docker is a platform and set of tools that allows you to create, deploy, and run applications in containers. Containers are lightweight, stand-alone, and executable packages that include everything needed to run a piece of software, such as code, runtime, system tools, and libraries. Docker makes it easier to develop, ship, and run applications consistently across different environments by isolating them within containers. This technology is widely used for software development and deployment to ensure consistent and reproducible application behavior.

### Docker Image -vs- Docker Container 
  - Image 
    - The Actual Package
    - Artifact, that can be moved around
    - `not running` 
  - Container
    - CONTAINER is a running environment for IMAGE

### Basic Commands:
  - ` docker images `
  - ` docker ps `
  - ` docker ps -a `
  - ` docker pull image:version-number `
  - ` docker run image `
  - ` docker run -pHostPort:ContainerPort image `
  - ` docker stop container-id `
  - ` docker start container-id `
