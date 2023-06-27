-- HealthInHarmony
-- Version: 0.1

-- Define HealthInHarmony class
local HealthInHarmony = {
	-- Properties
	health = 0,
	energy = 0
}

-- Constructor
function HealthInHarmony:new(health, energy)
	obj = {
		health = health,
		energy = energy
	}
	setmetatable(obj, self)
	self.__index = self
	return obj
end

-- Increase health
function HealthInHarmony:increaseHealth(amount)
	self.health = self.health + amount
end

-- Decrease health
function HealthInHarmony:decreaseHealth(amount)
	self.health = self.health - amount
end

-- Increase energy
function HealthInHarmony:increaseEnergy(amount)
	self.energy = self.energy + amount
end

-- Decrease energy
function HealthInHarmony:decreaseEnergy(amount)
	self.energy = self.energy - amount
end

-- Rest
function HealthInHarmony:rest(hours)
	self:increaseEnergy(hours * 8)
	self:increaseHealth(hours * 4)
end

-- Exercise
function HealthInHarmony:exercise(minutes)
	self:decreaseEnergy(minutes)
	self:increaseHealth(minutes)
end

-- Eat Healthy
function HealthInHarmony:eatHealthy()
	self:increaseEnergy(10)
	self:increaseHealth(20)
end

-- Eat Junk
function HealthInHarmony:eatJunk()
	self:decreaseHealth(15)
	self:increaseEnergy(10)
end

-- Sleep
function HealthInHarmony:sleep(hours)
	self:increaseHealth(hours * 10)
	self:increaseEnergy(hours * 2)
end

-- Drink Water
function HealthInHarmony:drinkWater()
	self:increaseHealth(2)
	self:increaseEnergy(4)
end

-- Take a Break
function HealthInHarmony:takeBreak(minutes)
	self:increaseHealth(minutes * 5)
	self:increaseEnergy(minutes * 6)
end

-- Get Health
function HealthInHarmony:getHealth()
	return self.health
end

-- Get Energy
function HealthInHarmony:getEnergy()
	return self.energy
end

return HealthInHarmony