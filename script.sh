yum install https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
yum install http://rpms.remirepo.net/enterprise/remi-release-6.rpm
yum install yum-utils
yum-config-manager --enable remi-php70
yum install php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo
