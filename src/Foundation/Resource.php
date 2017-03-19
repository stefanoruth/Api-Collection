<?php

namespace Kodo\Foundation;

class Resource
{
	private $core;

	public function __construct(Core $core)
	{
		$this->core = $core;
	}

	/**
	 * Fetches a specefik key from the config array
	 * and supports key dot notation
	 * @param  string $key
	 * @return mixed
	 */
	protected function config($key = null)
	{
		return $this->core->config($key);
	}

	/**
	 * Sends a request thought guzzle
	 * @param  string $method
	 * @param  string|null $path
	 * @param  array  $body
	 * @return mixed
	 */
	protected function request($method, $path = null, $body = [])
	{
		return $this->core->request($method, $path, $body);
	}
}