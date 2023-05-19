<p align="center">
  <a href="https://getSTISLA.com">
    <img src="https://avatars2.githubusercontent.com/u/45754626?s=75&v=4" alt="STISLA logo" width="75" height="75">
  </a>
</p>

<h1 align="center">STISLA for CodeIgniter</h1>

<p align="center">
  STISLA is Free Bootstrap Admin Template and will help you to speed up your project, design your own dashboard UI and the users will love it.
</p>

[![STISLA Preview](https://camo.githubusercontent.com/2135e0f6544a7286a3412cdc3df32d47fc91b045/68747470733a2f2f692e6962622e636f2f3674646d6358302f323031382d31312d31312d31352d33352d676574737469736c612d636f6d2e706e67)](https://getSTISLA.com)

## Table of contents

- [Link STISLA](#link-STISLA)
- [Installation](#installation)
- [Usage](#usage)
- [License](#License)

## Link STISLA
- Homepage: [getSTISLA.com](https://getSTISLA.com)
- Repository: [github.com/STISLA/STISLA](https://github.com/STISLA/STISLA)
- Documentation: [getSTISLA.com/docs](https://getSTISLA.com/docs)

## Installation
- [Download the latest release](https://github.com/KhidirDotID/STISLA-codeigniter/archive/v1.0.0.zip).
or clone the repo :
```
https://github.com/KhidirDotID/STISLA-codeigniter.git
```

## Usage
- Create a new Controller at `application/controllers` then put like this:
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_name extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Your title"
		);
		$this->load->view('View_name', $data);
	}
}
?>
```
- Create a new View at `application/views` then put like this:
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header'); ?>

      <!-- Main Content -->

<?php
$this->load->view('dist/_partials/footer'); ?>
```

## License

STISLA is under the [MIT License](LICENSE).
