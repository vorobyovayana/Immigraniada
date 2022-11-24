<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Spouse extends Model{

    use HasFactory;

   /* $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('documentType');
            $table->string('documentNumber');
            $table->date('dateOfBirth');
            $table->string('address');
            $table->date('mariageDate');
            $table->string('educationalInfo');
            $table->string('financialInfo');
            $table->string('workInfo');
            $table->string('additionalInfo');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');*/

            public function getId()
            {
            return $this->attributes['id'];
            }
            public function setId($id)
            {
            $this->attributes['id'] = $id;
            }

            public function getFirstName()
            {
            return $this->attributes['firstName'];
            }

            public function setFirstName($fname)
            {
            $this->attributes['firstName'] = $fname;
            }

            public function getLastName()
            {
            return $this->attributes['lastName'];
            }
            
            public function setLastName($lname)
            {
            $this->attributes['lastName'] = $lname;
            }

            public function getEmail()
            {
            return $this->attributes['email'];
            }

            public function setEmail($email)
            {
            $this->attributes['email'] = $email;
            }

            public function getPhone()
            {
            return $this->attributes['phone'];
            }
            
            public function setPhone($phone)
            {
            $this->attributes['phone'] = $phone;
            }

            public function getAddress()
            {
            return $this->attributes['address'];
            }
            
            public function setAddress($address)
            {
            $this->attributes['address'] = $address;
            }
            

            

            public function getDocumentType()
            {
            return $this->attributes['documentType'];
            }
            
            public function setDocumentType($documentType)
            {
            $this->attributes['documentType'] = $documentType;
            }

            public function getDocumentNumber()
            {
            return $this->attributes['documentNumber'];
            }
            
            public function setDocumentNumber($documentNumber)
            {
            $this->attributes['documentNumber'] = $documentNumber;
            }


            public function getDateOfBirth()
            {
            return $this->attributes['dateOfBirth'];
            }
            
            public function setDateOfBirth($dateOfBirth)
            {
            $this->attributes['dateOfBirth'] = $dateOfBirth;
            }


            public function getMariageDate()
            {
            return $this->attributes['mariageDate'];
            }
            
            public function setMariageDate($mariageDate)
            {
            $this->attributes['mariageDate'] = $mariageDate;
            }


            public function getEducationalInfo()
            {
            return $this->attributes['educationalInfo'];
            }
            
            public function setEducationalInfo($educationalInfo)
            {
            $this->attributes['educationalInfo'] = $educationalInfo;
            }


            public function getFinancialInfo()
            {
            return $this->attributes['financialInfo'];
            }
            
            public function setFinancialInfo($financialInfo)
            {
            $this->attributes['financialInfo'] = $financialInfo;
            }

            public function getWorkInfo()
            {
            return $this->attributes['workInfo'];
            }
            
            public function setWorkInfo($workInfo)
            {
            $this->attributes['workInfo'] = $workInfo;
            }   
            
            public function getAdditionalInfo()
            {
            return $this->attributes['additionalInfo'];
            }
            
            public function setAdditionalInfo($additionalInfo)
            {
            $this->attributes['additionalInfo'] = $additionalInfo;
            }       
            
            
            public function getUserId()
            {
            return $this->attributes['userId'];
            }
            
            public function setUserId($userId)
            {
            $this->attributes['userId'] = $userId;
            } 



            public function getCreatedAt()
            {
            return $this->attributes['created_at'];
            }
            public function setCreatedAt($createdAt)
            {
            $this->attributes['created_at'] = $createdAt;
            }
            public function getUpdatedAt()
            {
            return $this->attributes['updated_at'];
            }
            public function setUpdatedAt($updatedAt)
            {
            $this->attributes['updated_at'] = $updatedAt;
            }

        

}