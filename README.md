# base-wordpress

## installation

### npm install npm-install-all -g
### npm-install-all gulpfile.js
### ejoy

## for updating plugins

### npm i -g npm-check-updates
### ncu -u
### npm install


# fot deploy ftp
##https://github.com/marketplace/actions/ftp-deploy

### on:
###    push:
###    branches: [ dev ] or [ prod ]
###    #pull_request:
###        #branches: [ dev ] or [ prod ]
###    #types:
###        #- closed
###        #- merged
###    #status: {}    
###        name: 🚀 FTP Deploy
###       jobs:
###            FTP-Deploy-Action:
###        name: 🎉 FTP-Deploy-Action
###        runs-on: ubuntu-16.04
###        steps:
###           - name: 🚚 Get latest code
###        uses: actions/checkout@v2.1.0
###        with:
###            fetch-depth: 2
###        - name: 📂 FTP-Deploy-Action
###        uses: SamKirkland/FTP-Deploy-Action@3.0.0
###       with:
###            ftp-server: ftp://host/ or ftp.NAME.com
###            ftp-username: user
###            ftp-password: ${{ secrets.FTP_PASSWORD }}
