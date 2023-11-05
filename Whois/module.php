<?php

declare(strict_types=1);


	class Whois extends IPSModule {

		private $logLevel = 3;
		private $logCnt = 0;
		private $enableIPSLogOutput = false;

		private $sleekDbDir;
		private $sleekDbConfig;
		private $sleekDBStore;

		public function Create() {

			parent::Create();				//Never delete this line!

			$logMsg = sprintf("Create Modul '%s [%s]'...", IPS_GetName($this->InstanceID), $this->InstanceID);
			if($this->logLevel >= LogLevel::INFO) { $this->AddLog(__FUNCTION__, $logMsg); }
			IPS_LogMessage(__CLASS__."_".__FUNCTION__, $logMsg);
	
			$logMsg = sprintf("KernelRunlevel '%s'", IPS_GetKernelRunlevel());
			if($this->logLevel >= LogLevel::DEBUG) { $this->AddLog(__FUNCTION__, $logMsg); }
		}

		public function Destroy() {
			IPS_LogMessage(__CLASS__."_".__FUNCTION__, sprintf("Destroy Modul '%s' ...", $this->InstanceID));
			if($this->logLevel >= LogLevel::INFO) { $this->AddLog(__FUNCTION__, sprintf("Destroy Modul '%s [%s']...", IPS_GetName($this->InstanceID), $this->InstanceID), 0); }

		}

		public function ApplyChanges() 	{
			
			parent::ApplyChanges();			//Never delete this line!

			$this->SetStatus(104);			//102 = Instanz ist aktiv | 104 = Instanz ist inaktiv
		}

		protected function CalcDuration_ms(float $timeStart) {
			$duration =  microtime(true)- $timeStart;
			return round($duration*1000,2);
		}	

		protected function AddLog($name, $daten, $format=0, $enableIPSLogOutput=false) {
			$this->logCnt++;
			$logSender = "[".__CLASS__."] - " . $name;
			if($this->logLevel >= LogLevel::DEBUG) {
				$logSender = sprintf("%02d-T%2d [%s] - %s", $this->logCnt, $_IPS['THREAD'], __CLASS__, $name);
			} 
			$this->SendDebug($logSender, $daten, $format); 	
		
			if($enableIPSLogOutput or $this->enableIPSLogOutput) {
				if($format == 0) {
					IPS_LogMessage($logSender, $daten);	
				} else {
					IPS_LogMessage($logSender, $this->String2Hex($daten));			
				}
			}
		}

	}